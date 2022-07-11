<?php

namespace App\Http\Controllers;

use App\Models\ReferralPartner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferralPartnerRequest;
use App\Http\Requests\UpdateReferralPartnerRequest;

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
