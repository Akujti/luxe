<?php

namespace App\Http\Controllers;

use App\Jobs\MarkCouponExpired;
use App\Mail\LowStockMail;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDF;

class TestController extends Controller
{
    public function index()
    {
        if (App::environment('local')) {
            $a = Auth::loginUsingId(149);
            return redirect()->route('home');
        }
    }

    public function update_vimeo() {}

    public function submit(Request $request) {}
}
