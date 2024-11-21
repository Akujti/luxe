<?php

namespace App\Http\Controllers;

use App\Jobs\MarkCouponExpired;
use App\Mail\DailyComingSoonListingsMail;
use App\Mail\LowStockMail;
use App\Models\Collection;
use App\Models\Listing;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Notifications\CollectionShareNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use PDF;

class TestController extends Controller
{
    public function index()
    {
        Config::set('mail.mailers.smtp.host', 'smtp.office365.com');
        Config::set('mail.mailers.smtp.port', 587);
        Config::set('mail.mailers.smtp.username', 'noreply@luxeknows.com');
        Config::set('mail.mailers.smtp.password', 'zpqhszrxplbjhhbc');
        Config::set('mail.mailers.smtp.encryption', 'tls');
        $listings = Listing::whereDate('created_at', Carbon::yesterday())->get();
        Mail::to('art@ajroni.com')->send(new DailyComingSoonListingsMail($listings));
        return 123;
    }

    public function update_vimeo() {}

    public function submit(Request $request) {}
}
