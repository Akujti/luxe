<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyStatusNotCompleted;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Log;

class OrderStatusNotCompleted implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $row = LuxeStoreOrder::find($this->data[0]->id);

        if ($row && $row->status != 'Completed') {
            $to = ['designs@luxeknows.com', 'operations@luxeknows.com', 'email@luxeknows.com', 'wesley@luxeknows.com'];

            Mail::to($to)->send(new NotifyStatusNotCompleted($row, $this->data[1]));
        }
    }
}
