<?php

namespace App\Console\Commands;

use App\Mail\DailyStoreReport;
use App\Models\FormSubmit;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Models\Notification;
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

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $orders = LuxeStoreOrder::whereHas('products')->whereDate('created_at', Carbon::yesterday())->with(['products', 'billing_details', 'payment', 'inputs', 'user'])->latest()->get();
        $details['no_orders'] = count($orders);
        $total = 0;
        $final_orders = [];
        foreach ($orders as $order) {
            $total += $order->payment->total_price;
            $temp['agent'] = $order->user && $order->user->profile ? $order->user->profile->fullname : '-';
            $temp['amount'] = $order->payment ? $order->payment->total_price : '-';
            $products = '';
            foreach ($order->products as $product) {
                $products .= ' ' . $product->product->name;
            }
            $temp['products'] = $products;
            $temp['created_at'] = $order->created_at;
            array_push($final_orders, $temp);
        }
        $details['submissions'] = FormSubmit::whereDate('created_at', Carbon::yesterday())->orderBy('form_title', 'asc')->get();
        $details['total'] = $total;

        usort($final_orders, function ($a, $b) {
            return strcmp($a['products'], $b['products']);
        });
        $details['orders'] = $final_orders;
        $details['test'] = $orders;
        $notification = Notification::where('title', 'Daily Store Report')->first();
        $emails = $notification->getEmails();
        $bcc = $notification->getBccEmails();
        Mail::to($emails)->bcc($bcc)->send(new DailyStoreReport($details));
    }
}
