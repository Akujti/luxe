<?php

namespace App\Http\Controllers;

use App\Models\ReferralPartner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferralPartnerRequest;
use App\Http\Requests\UpdateReferralPartnerRequest;
use App\Mail\GeneralMailTemplate;
use App\Models\FormSubmit;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ReferralPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReferralPartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReferralPartnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReferralPartner  $referralPartner
     * @return \Illuminate\Http\Response
     */
    public function show(ReferralPartner $referralPartner)
    {
        if (request()->wantsJson()) {
            return response()->json(['referralPartner' => $referralPartner->load('meta_items')]);
        }
        return view('pages.referral-partners.show', compact('referralPartner'));
    }

    public function submit_inquiry(ReferralPartner $referralPartner)
    {
        $emails = ['email@luxeknows.com', auth()->user()->email];
        foreach ($referralPartner->meta_items as $item) {
            if ($item->type === 'email')
                array_push($emails, str_replace('mailto:', '', $item->path));
        }
        $agent = auth()->user();
        $details = [
            'company' => $referralPartner->title,
            'form_title' => 'Referral Partner - ' . $referralPartner->title,
            'agent_name' => $agent->profile->fullname,
            'agent_email' => $agent->email,
            'link' => '<a href=" ' . route('referral-partners.show', $referralPartner) . '">Click Here</a>'
        ];
        try {
            FormSubmit::create([
                'form_title' => $details['form_title'],
                'status' => 0,
                'agent_name' => $agent->profile->fullname,
                'agent_email' => $agent->email,
                'details' => json_encode($details),
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Form couldn\'t be saved');
        }

        try {
            Mail::to($emails)->send(new GeneralMailTemplate($details));
        } catch (\Throwable $th) {
            Log::alert($th);
            return redirect()->back()->with('error', 'Form is saved but there was a problem sending the email');
        }
        session()->flash('modal', 'Success');
        return redirect()->back()->with('message', 'Inquiry has been submitted!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReferralPartner  $referralPartner
     * @return \Illuminate\Http\Response
     */
    public function edit(ReferralPartner $referralPartner)
    {
        return view('pages.referral-partners.edit', compact('referralPartner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReferralPartnerRequest  $request
     * @param  \App\Models\ReferralPartner  $referralPartner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReferralPartnerRequest $request, ReferralPartner $referralPartner)
    {
        if ($request->hasFile('image')) {
            $name = time() .  '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('/referral', $name, 'public');
            $referralPartner->meta_items()->create(
                ['name' => 'Logo', 'type' => 'img', 'path' => $path]
            );
        }
        return back()->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReferralPartner  $referralPartner
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReferralPartner $referralPartner)
    {
        //
    }
}
