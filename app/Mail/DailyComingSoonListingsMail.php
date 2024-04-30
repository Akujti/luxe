<?php

namespace App\Mail;

use App\Models\Listing;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DailyComingSoonListingsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $listings;

    public function __construct($listings)
    {
        $this->listings = $listings;
    }

    public function build()
    {
        return $this->view('email-template.dailyComingSoonListings');
    }
}
