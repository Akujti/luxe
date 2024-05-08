<?php

namespace App\Console\Commands;

use App\Mail\DailyComingSoonListingsMail;
use App\Models\Listing;
use App\Models\User;
use App\Notifications\DailyComingSoonListingsNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyComingSoonListings extends Command
{
    protected $signature = 'notify:daily';

    protected $description = 'Send daily notifications to users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $listings = Listing::whereDate('created_at', Carbon::yesterday());
        if (count($listings)) {
            User::where('coming_soon_notifications', true)
                ->select('email')
                ->chunk(500, function ($users) use ($listings) {
                    $emails = $users->pluck('email')->toArray();
                    Mail::to($emails)->send(new DailyComingSoonListingsMail($listings));
                });
            $this->info('Daily notifications have been sent.');
        } else
            $this->info('There aren\'t any listings created today');
    }
}