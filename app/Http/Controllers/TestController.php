<?php

namespace App\Http\Controllers;

use App\Mail\CouponUsedMailTemplate;
use App\Mail\DailyStoreReport;
use App\Models\BrokersumoAgent;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function index()
    {
        $orders = LuxeStoreOrder::whereHas('products')->whereDate('created_at', Carbon::today())->with(['products', 'billing_details', 'payment', 'inputs', 'user'])->latest()->get();
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
        $details['total'] = $total;
        $details['orders'] = $final_orders;
        $details['test'] = $orders;
        $emails = ['art@ajroni.com'];
        Mail::to($emails)->send(new DailyStoreReport($details));
        return $details;
    }

    public function update_vimeo()
    {
    }

    public function submit(Request $request)
    {
    }
}
