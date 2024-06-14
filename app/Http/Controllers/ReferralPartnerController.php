<?php

namespace App\Http\Controllers;

use App\Models\ReferralPartner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferralPartnerRequest;
use App\Http\Requests\UpdateReferralPartnerRequest;
use App\Mail\GeneralMailTemplate;
use App\Models\FormSubmit;
use App\Models\ReferralPartnerCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ReferralPartnerController extends Controller
{
    public function index(ReferralPartnerCategory $category)
    {
        $referralPartners = ReferralPartner::get();
        $categories = ReferralPartnerCategory::where('parent_id', $category->id)->get();
        return view('admin.referral-partners.index', compact('referralPartners', 'categories'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'referral_partner_category_id' => 'required|exists:referral_partner_categories,id',
        ]);

        ReferralPartner::create([
            'title' => $request->title,
            'referral_partner_category_id' => $request->referral_partner_category_id
        ]);

        return back()->with('message', 'Referral Partner Created Successfully');
    }

    public function show(ReferralPartner $referralPartner)
    {
        if (request()->wantsJson()) {
            return response()->json(['referralPartner' => $referralPartner->load('meta_items')]);
        }
        $meta_items = $referralPartner->meta_items()->orderBy('created_at', 'ASC')->get();
        return view('pages.referral-partners.show', compact('referralPartner', 'meta_items'));
    }

    public function showAdmin(ReferralPartner $referralPartner)
    {
        $referralPartner->load('meta_items');
        return view('admin.referral-partners.show', compact('referralPartner'));
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

    public function edit(ReferralPartner $referralPartner)
    {
        return view('pages.referral-partners.edit', compact('referralPartner'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'referral_partner_id' => 'required|exists:referral_partners,id',
        ]);

        ReferralPartner::find($request->referral_partner_id)->update([
            'title' => $request->title,
        ]);

        return back()->with('message', 'Referral Partner Updated Successfully');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'referral_partner_id' => 'required|exists:referral_partners,id',
        ]);
        ReferralPartner::find($request->referral_partner_id)->delete();
        return back()->with('message', 'Referral Partner Deleted Successfully');
    }
}
