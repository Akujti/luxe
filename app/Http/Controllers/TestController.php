<?php

namespace App\Http\Controllers;

use App\Mail\CouponUsedMailTemplate;
use App\Models\BrokersumoAgent;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function index()
    {
        $couponDb = LuxeStoreCouponCode::firstOrFail();
        $details['coupon'] = $couponDb;
        $emails = ['operations@luxeknows.com', 'email@luxeknows.com'];
        Mail::to($emails)->send(new CouponUsedMailTemplate($details));
        return view('test');
    }

    public function update_vimeo()
    {
    }

    public function submit(Request $request)
    {
    }
}
