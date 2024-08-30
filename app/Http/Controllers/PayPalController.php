<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PayPalController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $data = $request->all();

        // Check if payment is completed
        if ($data['event_type'] === 'CHECKOUT.ORDER.APPROVED') {
            $orderId = $data['resource']['purchase_units'][0]['reference_id'];
            Log::info('Order id: ' . $orderId);
        }
    }

}
