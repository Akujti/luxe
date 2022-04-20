<?php

namespace App\Http\Controllers\LuxeStore;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Http\Requests\LuxeStore\Product\AddRequest;
use App\Http\Requests\LuxeStore\Product\DeleteRequest;
use App\Http\Requests\LuxeStore\Product\UpdateRequest;

class CouponCodeController extends Controller
{
    public function index() {
        $categories = LuxeStoreCouponCode::latest()->paginate(8); 
        return view('luxe_store.index', compact('categories'));
    }

    public function apply_coupon(Request $req) {
        $row = LuxeStoreCouponCode::where('code', $req->code)->first();

        if($row && $row->count() && $row->expired == 0) {
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

        return back()->with('message', 'Created successfully');
    }

    public function update(UpdateRequest $req)
    {
        $row = LuxeStoreCouponCode::find($req->id);

        $row->code = $req->code;
        $row->price = $req->price;
        $row->expired = true;
        $row->save();

        return back()->with('message', 'Updated successfully');
    }

    public function delete(DeleteRequest $req) {
        $row = LuxeStoreCouponCode::find($req->id);

        if($row) {
            $row->delete();
        }
        return back()->with('message', 'Deleted successfully');
    }
}
