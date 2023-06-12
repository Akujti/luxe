<?php

namespace App\Console\Commands;

use App\Mail\DailyStoreReport;
use App\Models\FormSubmit;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyStoreReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $orders = LuxeStoreOrder::whereHas('products')->whereDate('created_at', Carbon::yesterday())->with(['products', 'billing_details', 'payment', 'inputs', 'user'])->latest()->get();
        $details['no_orders'] = count($orders);
        $total = 0;
        $final_orders = [];
        foreach ($orders as $order) {
            $total += $order->payment->total_price;
            $temp['agent'] = $order->user &&  $order->user->profile ? $order->user->profile->fullname : '-';
            $temp['amount'] = $order->payment ? $order->payment->total_price : '-';
            $products = [];
            foreach ($order->products as $product) {
                array_push($products, $product->product->name);
            }
            $temp['products']  = $products;
            $temp['created_at'] = $order->created_at;
            array_push($final_orders, $temp);
        }
        $details['submissions'] = FormSubmit::whereDate('created_at', Carbon::yesterday())->get();
        $details['total'] = $total;
        $details['orders'] = $final_orders;
        $details['test'] = $orders;
        $emails = ['operations@luxeknows.com', 'email@luxeknows.com', 'wesley@luxeknows.com'];
        Mail::to($emails)->send(new DailyStoreReport($details));
    }
}
