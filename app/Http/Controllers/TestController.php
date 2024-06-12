<?php

namespace App\Http\Controllers;


use App\Mail\DailyComingSoonListingsMail;
use App\Models\Listing;
use App\Models\Notification;
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
//        return Storage::disk('public')->url('images/1714759493.jpg');
//        $listings = Listing::take(10)->get();
//        User::where('coming_soon_notifications', true)
//            ->select('email')
//            ->chunk(500, function ($users) use ($listings) {
//                $emails = $users->pluck('email')->toArray();
//                Mail::to($emails)->send(new DailyComingSoonListingsMail($listings));
//            });
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
