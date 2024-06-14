<?php

namespace App\Http\Controllers;

use App\Models\ReferralPartner;
use App\Models\ReferralPartnerCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferralPartnerCategoryRequest;
use App\Http\Requests\UpdateReferralPartnerCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ReferralPartnerCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = ReferralPartnerCategory::where('parent_id', $request->parent_id)->get();
        if (request()->wantsJson()) {
            return response()->json(['categories' => $categories]);
        }
        return view('pages.referral-partners.category.index', compact('categories'));
    }

    public function indexAdmin(Request $request)
    {
        $rows = ReferralPartnerCategory::where('parent_id', $request->parent_id)->orderBy('title')->get();
        $referralPartners = ReferralPartner::where('referral_partner_category_id', $request->parent_id)->get();
        return view('admin.referral-partner-categories.index', compact('rows', 'referralPartners'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $path = null;
        if ($request->image) {
            $file = $request->image;
            $img = Image::make($file)->resize(350, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg');
            $name = 'referral_partners_' . time() . Str::random(10) . '.jpg';
            $path = 'referral-partners/' . $name;
            Storage::disk('public')->put($path, (string)$img->encode());
        }

        ReferralPartnerCategory::create([
            'title' => $request->title,
            'icon' => 'storage/' . $path
        ]);

        return back()->with('message', 'Category created');
    }

    public function show(ReferralPartnerCategory $referralPartnerCategory)
    {
        $referralPartnerCategory->load('children', 'referral_partners');
        if (request()->wantsJson()) {
            return response()->json(['category' => $referralPartnerCategory]);
        }
        return view('pages.referral-partners.category.show', compact('referralPartnerCategory'));
    }

    public function edit(ReferralPartnerCategory $referralPartnerCategory)
    {
        return view('pages.referral-partner-category.edit', compact('referralPartnerCategory'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:referral_partner_categories,id',
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $path = null;
        if ($request->image) {
            $file = $request->image;
            $img = Image::make($file)->resize(350, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg');
            $name = 'referral_partners_' . time() . Str::random(10) . '.jpg';
            $path = 'referral-partners/' . $name;
            Storage::disk('public')->put($path, (string)$img->encode());
        }

        ReferralPartnerCategory::find($request->id)->update([
            'title' => $request->title,
            'icon' => 'storage/' . $path
        ]);

        return back()->with('message', 'Category updated');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:referral_partner_categories,id',
        ]);

        ReferralPartnerCategory::find($request->id)->delete();
        return back()->with('message', 'Category deleted');
    }
}
