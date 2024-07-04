<?php

namespace App\Http\Controllers;


use App\Mail\DailyComingSoonListingsMail;
use App\Models\Listing;
use App\Models\Notification;
use App\Models\ReferralPartnerCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
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

    public function update_vimeo()
    {
    }

    public function submit(Request $request)
    {
    }
}
