<?php

namespace App\Jobs;

use App\Mail\CouponExpired;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MarkCouponExpired implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $luxeStoreCouponCode;
    public function __construct(LuxeStoreCouponCode $luxeStoreCouponCode)
    {
        $this->luxeStoreCouponCode = $luxeStoreCouponCode;
    }


    public function handle()
    {
        if (!$this->luxeStoreCouponCode->expired) {
            $this->luxeStoreCouponCode->update(['expired' => true]);
            $notification = Notification::where('title', 'Automatic Coupon Expiration')->first();
            if ($notification) {
                $emails = $notification->getEmails();
                $bcc = $notification->getBccEmails();
                Mail::to($emails)->bcc($bcc)->send(new CouponExpired($this->luxeStoreCouponCode->code));
            }
        }
    }
}
