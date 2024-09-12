<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSS only -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap');

        * {
            font-family: Lato;
            font-weight: 400;
        }

        img {
            max-width: 100%;
        }

        .wrap {
            margin: 80px 0;
            justify-content: center;
            align-items: center;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 40px;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        .col {
            width: 100%;
            background-color: white;
            padding: 10px;
            margin-top: 20px;
        }

        .bold-text {
            font-weight: 600;
        }

        .link {
            text-align: center;
            margin-top: 20px;
        }

        h3 {
            font-size: 24px;
            text-align: center;
        }

        h5 {
            text-align: center;
            font-size: 16px;
        }

        #th-row {
            font-weight: 600;
        }
    </style>
</head>

<body>
<div class="wrap">
    <div style="text-align: center">
        <img src="{{ url('/images/logo-black.png') }}" alt="">
    </div>
    <hr>
    <div class="" style="width: 100%">
        <div class="box">
            @if($days)
                <h3>{{ $days }} days have passed and the order has not been completed</h3>
            @endif
            <h4 class="text-center h4">Go to order: <a
                    href="{{ route('admin.orders.show', $details->id) }}">#{{ $details->id }}</a></h4>
        </div>

        <div>
            @if($details->status !== 'Not Paid')
                <p>Order Status: <b class="bold-text">{{ $details->status }}</b></p>
                <hr>
                  <p>Order Last Updated At: <b class="bold-text">{{ $details->updated_at }}</b></p>
            @endif

            <p>Created Time: <b class="bold-text">{{ $details->created_at }}</b></p>
            <hr>
            <p>Order By: <b
                    class="bold-text">{{ App\Models\User::withTrashed()->find($details->user_id)->profile->fullname }}</b>
            </p>
            <hr>
            <p>Request Info Note: <b class="bold-text">{{ $details->request_info ?? 'N/A' }}</b></p>
            <hr>
            <p>Request Info Response: <b class="bold-text">{{ $details->request_info_response ?? 'N/A' }}</b></p>
            <br>
            <hr>

            <p>Billing Agent Name: <b class="bold-text">{{ $details->billing_details->agent_name }}
                    {{ $details->billing_details->agent_surname }}</b></p>
            <p>Billing Address: <b class="bold-text">{{ $details->billing_details->street_address }},
                    {{ $details->billing_details->city }}, {{ $details->billing_details->zip_code }}</b></p>
            <p>Email Address: <b class="bold-text">{{ $details->billing_details->email }}</b></p>
            <p>Phone: <b class="bold-text">{{ $details->billing_details->phone }}</b></p>
            <br>
            <hr>

            <p>Shipping Agent Name: <b class="bold-text">{{ $details->shipping_details->agent_name }}
                    {{ $details->shipping_details->agent_surname }}</b></p>
            <p>Shipping Address: <b class="bold-text">{{ $details->shipping_details->street_address }},
                    {{ $details->shipping_details->city }}, {{ $details->shipping_details->zip_code }}</b></p>
            <p>Email Address: <b class="bold-text">{{ $details->shipping_details->email }}</b></p>
            <p>Phone: <b class="bold-text">{{ $details->shipping_details->phone }}</b></p>
            <hr>

            <table class="table">
                <thead>
                <tr>
                    <th id="th-row" style="text-align: left;">Item</th>
                    <th id="th-row">Cost</th>
                    <th id="th-row">Qty</th>
                    <th id="th-row">Total</th>
                </tr>
                </thead>
                <tbody>
                @forelse($details->products as $order_product)
                    <tr>
                        <td>
                            <div style="display:flex;align-items:center;gap: 5px">
                                <img width="75px"
                                     src="{{ asset('storage/' . $order_product->product->preview_image) }}"
                                     alt=""> {{ $order_product->product->name }}
                                {{ $order_product->variant_name ? ' - ' . $order_product->variant_value : '' }}
                            </div>
                        </td>
                        <td width="1%" style="padding:14px">${{ $order_product->price }}</td>
                        <td width="1%" style="padding:14px">{{ $order_product->quantity }}</td>
                        <td width="1%" style="padding:14px">
                            ${{ $order_product->price * $order_product->quantity }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Products Found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <hr>
            <div style="width:100%;text-align: right;">
                <p class="text-right">Items Subtotal: <b class="bold-text">${{ $details->payment->sub_total }}</b>
                </p>
                @if ($details->payment->coupon_code)
                    <p class="text-right">Coupon Discount: <b
                            class="bold-text">${{ $details->payment->coupon_code }}</b></p>
                @endif
                <p class="text-right">Order Total: <b class="bold-text">${{ $details->payment->total_price }}</b>
                </p>
            </div>
        </div>

        <div class="link">
            <a href="https://myluxehub.com">https://myluxehub.com/</a>
        </div>
    </div>
</div>
</body>

</html>
<style>
    .text-center {
        text-align: center;
    }

    .h4 {
        font-size: 20px;
    }
</style>
