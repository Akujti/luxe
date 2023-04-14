<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyStatusNotCompleted;
use App\Mail\NotifyStatusTest;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class OrderStatusTest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $to = ['test@test.com'];
        Mail::to($to)->send(new NotifyStatusTest());
    }
}
