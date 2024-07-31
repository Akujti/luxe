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
    </style>
</head>

<body>
<div class="wrap">
    <div style="text-align: center">
        <img src="{{ url('/images/logo-black.png') }}" alt="">
    </div>
    <hr>
    <div class="" style="width: 100%">
        @if ($details['type'] == 'admin')
            <div class="box">
                <h3>A new order has been added</h3>
                @if ($details['products'])
                    @foreach ($details['products'] as $rowProduct)
                        @if ($rowProduct->product->verbiages_text)
                            <p class="border-bottom pb-3 text-center">{{ $rowProduct->product->verbiages_text }}</p>
                        @endif
                    @endforeach
                @endif
                <h5><a href="{{ route('admin.orders.show', $details['data']->id) }}">Go to orders</a></h5>
            </div>
        @else
            <div class="box">
                <h3>The order has been successfully created - <a href="{{route('my_orders.show',$details['id'])}}">
                        #{{ $details['data']->id}}</a>
                </h3>
                @if ($details['is_marketing_menu_order'])
                    <p class="text-center bold-text ">Templated requests:</p>
                    <p class="text-center">1-2 business days turnaround</p>
                    <p class="text-center">Examples: Email signature, email blast templates, door hangers.</p>
                    <br>
                    <p class="text-center bold-text ">Custom requests:</p>
                    <p class="text-center">Expect email communication from Marketing Dept within 2 business days.
                        Project turnaround time TBD based on request.</p>
                    <p class="text-center">Examples: Brand package, custom designs, logos</p>
                @endif
                <div>
                    <p>Order Status: <b class="bold-text">{{ $details->status }}</b></p>
                    <hr>
                    <p>Created Time: <b class="bold-text">{{ $details->created_at }}</b></p>
                    <hr>
                    <p>Order By: <b
                            class="bold-text">{{ App\Models\User::withTrashed()->find($details->user_id)->profile->fullname }}</b>
                    </p>
                    <hr>
                    <p>Request Info Note: <b class="bold-text">{{ $details->request_info ?? 'N/A' }}</b></p>
                    <hr>
                    <p>Request Info Response: <b class="bold-text">{{ $details->request_info_response ?? 'N/A' }}</b>
                    </p>
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
                        <p class="text-right">Items Subtotal: <b
                                class="bold-text">${{ $details->payment->sub_total }}</b>
                        </p>
                        @if ($details->payment->coupon_code)
                            <p class="text-right">Coupon Discount: <b
                                    class="bold-text">${{ $details->payment->coupon_code }}</b></p>
                        @endif
                        <p class="text-right">Order Total: <b
                                class="bold-text">${{ $details->payment->total_price }}</b>
                        </p>
                    </div>
                </div>
                <h5 class="bold-text">Thank you.</h5>
            </div>
        @endif
        <div class="link">
            <a href="https://myluxehub.com">https://myluxehub.com/</a>
        </div>
    </div>
</div>
</body>

</html>
<style>
    .border-bottom {
        border-bottom: 1px solid black;
    }

    .pb-3 {
        padding-bottom: 15px !important;
    }

    .text-center {
        text-align: center;
    }
</style>
