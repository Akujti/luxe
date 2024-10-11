<?php

namespace App\Http\Controllers\LuxeStore;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Http\Requests\LuxeStore\Coupon\AddRequest;
use App\Http\Requests\LuxeStore\Coupon\DeleteRequest;
use App\Http\Requests\LuxeStore\Coupon\UpdateRequest;
use App\Jobs\MarkCouponExpired;
use Carbon\Carbon;

class CouponCodeController extends Controller
{
    public function index()
    {
        $coupons = LuxeStoreCouponCode::latest()->paginate(15);
        return view('admin.coupons.index', compact('coupons'));
    }

    public function apply_coupon(Request $req)
    {
        $row = LuxeStoreCouponCode::where('code', $req->code)->first();
        if ($row && $row->count() && $row->expired == 0 && $row->price <= $req->sub_total) {
            if ($req->user()->orders()->where('coupon_code', $row->code)->count()) {
                return back()->with('error', 'You have already used this coupon code');
            }
            Session::put('coupon_code', ['code' => $row->code, 'price' => $row->price]);

            return back()->with('message', 'You have successfully earned a coupon code');
        } else {
            return back()->with('error', 'Coupon is expired or something went wrong!');
        }
    }

    public function create(AddRequest $req)
    {
        $row = new LuxeStoreCouponCode;

        $row->code = $req->code;
        $row->price = $req->price;
        $row->save();
        if ($req->delay) {
            $delay = Carbon::parse($req->delay)->endOfDay();
            dispatch(new MarkCouponExpired($row))->delay(now()->addSeconds(10));
        }
        return back()->with('message', 'Created successfully');
    }

    public function update(UpdateRequest $req)
    {
        $row = LuxeStoreCouponCode::find($req->id);

        $row->code = $req->code;
        $row->price = $req->price;
        $row->expired = $req->expired;
        $row->save();

        return back()->with('message', 'Updated successfully');
    }

    public function delete(DeleteRequest $req)
    {
        $row = LuxeStoreCouponCode::find($req->id);

        if ($row) {
            $row->delete();
        }
        return back()->with('message', 'Deleted successfully');
    }
}
