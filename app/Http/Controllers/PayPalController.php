<?php

namespace App\Http\Controllers;

use App\Models\LuxeStore\Order\LuxeStoreOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PayPalController extends Controller
{
    /**
     * @throws \JsonException
     */
    public function handleWebhook(Request $request)
    {
        $data = $request->all();


        // Check if payment is completed
        if ($data['event_type'] === 'CHECKOUT.ORDER.APPROVED') {
            Log::info(json_encode($data, JSON_THROW_ON_ERROR));
            $orderId = $data['resource']['purchase_units'][0]['order_id'];

            $order = LuxeStoreOrder::find($orderId);
            if ($order) {
                $order->updateQuietly([
                    'status' => 'Paid'
                ]);
            } else {
                Log::error('Order Not Found');
                Log::info(json_encode($data, JSON_THROW_ON_ERROR));
            }
        }
    }

}
