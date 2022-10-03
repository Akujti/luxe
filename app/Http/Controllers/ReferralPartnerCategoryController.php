<?php

namespace App\Http\Controllers;

use App\Models\ReferralPartnerCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferralPartnerCategoryRequest;
use App\Http\Requests\UpdateReferralPartnerCategoryRequest;

class ReferralPartnerCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ReferralPartnerCategory::whereNull('parent_id')->get();
        if (request()->wantsJson()) {
            return response()->json(['categories' => $categories]);
        }
        return view('pages.referral-partners.category.index', compact('categories'));
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
     * @param  \App\Http\Requests\StoreReferralPartnerCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReferralPartnerCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReferralPartnerCategory  $referralPartnerCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ReferralPartnerCategory $referralPartnerCategory)
    {
        $referralPartnerCategory->load('children', 'referral_partners');
        if (request()->wantsJson()) {
            return response()->json(['category' => $referralPartnerCategory]);
        }
        return view('pages.referral-partners.category.show', compact('referralPartnerCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReferralPartnerCategory  $referralPartnerCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ReferralPartnerCategory $referralPartnerCategory)
    {
        return view('pages.referral-partner-category.edit', compact('referralPartnerCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReferralPartnerCategoryRequest  $request
     * @param  \App\Models\ReferralPartnerCategory  $referralPartnerCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReferralPartnerCategoryRequest $request, ReferralPartnerCategory $referralPartnerCategory)
    {
        if ($request->hasFile('image')) {
            $name = time() .  '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('/referral', $name, 'public');
            $referralPartnerCategory->update(
                ['icon' =>  $path]
            );
        }
        return back()->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReferralPartnerCategory  $referralPartnerCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReferralPartnerCategory $referralPartnerCategory)
    {
        //
    }
}
