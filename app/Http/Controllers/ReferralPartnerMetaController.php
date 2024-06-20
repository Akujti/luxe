<?php

namespace App\Http\Controllers;

use App\Models\ReferralPartner;
use App\Models\ReferralPartnerMeta;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferralPartnerMetaRequest;
use App\Http\Requests\UpdateReferralPartnerMetaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ReferralPartnerMetaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request, ReferralPartner $referralPartner)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'value' => 'nullable',
        ]);

        $path = $request->value;
        if ($request->name == 'Logo') {
            if (is_file($request->value)) {
                $file = $request->value;
                $img = Image::make($file)->resize(350, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode('jpg');
                $name = 'referral_partners_' . time() . Str::random(10) . '.jpg';
                $path = 'referral-partners/' . $name;
                Storage::disk('public')->put($path, (string)$img->encode());
            }
            $referralPartner->meta_items()->updateOrCreate(['name' => $request->name], [
                'type' => $request->type,
                'name' => $request->name,
                'path' => $path,
            ]);
        } else {
            $referralPartner->meta_items()->create([
                'type' => $request->type,
                'name' => $request->name,
                'path' => $path,
            ]);
        }


        return redirect()->back()->with('message', 'Referral Partner Detail Created Successfully');
    }

    public function update(Request $request, $referral_partner, ReferralPartnerMeta $meta)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'value' => 'nullable',
        ]);

        $meta->update([
            'type' => $request->type,
            'name' => $request->name,
            'path' => $request->value,
        ]);

        return redirect()->back()->with('message', 'Referral Partner Detail Updated Successfully');
    }

    public function destroy(Request $request, $referral_partner, ReferralPartnerMeta $meta)
    {
        $meta->delete();
        return redirect()->back()->with('message', 'Referral Partner Detail Deleted Successfully');
    }
}
