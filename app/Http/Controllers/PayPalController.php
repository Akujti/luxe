<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PayPalController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $data = $request->all();

        Log::info('paypal webhook received');


        // Verify PayPal webhook signature here (optional but recommended)

        // Check if payment is completed
        if ($data['event_type'] === 'PAYMENT.CAPTURE.COMPLETED') {
            DB::beginTransaction();
            try {
                // Extract necessary information
                $payerEmail = $data['resource']['payer']['email_address'];
                $orderId = $data['resource']['supplementary_data']['related_ids']['order_id'];

                // Retrieve form data using order ID or email or other unique identifier
                $billingInfo = $data['resource']['billing_info'];  // or use session to retrieve it

                // Perform the same actions as in the create method (save order, update stock, send emails)
                $this->processOrder($billingInfo, $orderId, $payerEmail);

                DB::commit();
            } catch (\Throwable $th) {
                DB::rollBack();
                Log::error($th->getMessage());
                return response()->json(['error' => 'Internal Server Error'], 500);
            }
        }

        return response()->json(['status' => 'success'], 200);
    }

    private function processOrder($billingInfo, $orderId, $payerEmail)
    {
        // Implement the logic from the create() method in your original code
    }
}
