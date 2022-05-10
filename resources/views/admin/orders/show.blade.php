@extends('admin.layouts.app', ['active' => 'Orders'])

@section('css')
<style>
    body {
        font-family: 'gothicregular';
    }
    #td-row, #th-row {
        border: none !important
    }
    #td-row {
        height: 90px;
    }
    label {
        color: #777;
        font-family: 'gothicbold';
    }
    .title {
        background-color: #262626;
        color: #fff;
        padding: 8px;
        font-family: 'gothicbold';
    }
    .title-item {
        font-family: 'gothicbold';
        text-align: start;
    }
    .card {
        border: none !important;
    }
    .card-header {
        border-top: 1px solid rgba(0,0,0,.125);
        border-bottom: 1px solid transparent !important;
    }
    th {
        font-family: 'gothicbold' !important;
    }
    td {
        vertical-align: middle !important;
        font-family: 'gothicregular' !important;
    }
    @media screen and (max-width: 500px) {
        #td-row, #th-row {
            width: 50% !important;
        }
        .card-body {
            width: 473px !important;
        }
    }
    .bold {
        font-family: 'gothicbold' !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-2">
            <h5 class="h5-luxe">Order #{{ $order->id }} details</h5>
        </div>
        
        <div class="w-100">
            <p>Payment via PayPal. Paid on {{ $order->created_at }}</p>

            <div class="row p-0 m-0">
                <div class="col-4">
                    <h5 class="bold">General</h5>
                    <div class="form-group">
                        <label for="">Date created:</label>
                        <div class="input-group">
                            <p>{{ $order->created_at}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Status:</label>
                        <div class="input-group">
                            <p>{{ $order->status}}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Customer:</label>
                        <div class="input-group">
                            <p>{{ !$order->user->profile ? '' : $order->user->profile->fullname }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <h5 class="bold">Billing</h5>
                    <div>
                        <p>{{ $order->billing_details->agent_name . ' ' . $order->billing_details->agent_surname }}</p>
                        <p>{{ $order->billing_details->street_address }}</p>
                        <p>{{ $order->billing_details->city .', '. $order->billing_details->zip_code }}</p>

                        <label>Email address:</label>
                        <p><a href="mailto:{{ $order->billing_details->email }}">{{ $order->billing_details->email }}</a></p>

                        <label>Phone:</label>
                        <p><a href="tel:{{ $order->billing_details->phone }}">{{ $order->billing_details->phone }}</a></p>
                    </div>
                </div>

                <div class="col-4">
                    <h5 class="bold">Shipping</h5>
                    <div>
                        <p>{{ $order->shipping_details->agent_name . ' ' . $order->shipping_details->agent_surname }}</p>
                        <p>{{ $order->shipping_details->street_address }}</p>
                        <p>{{ $order->shipping_details->city .', '. $order->shipping_details->zip_code }}</p>

                        <label>Email address:</label>
                        <p><a href="mailto:{{ $order->shipping_details->email }}">{{ $order->shipping_details->email }}</a></p>

                        <label>Phone:</label>
                        <p><a href="tel:{{ $order->shipping_details->phone }}">{{ $order->shipping_details->phone }}</a></p>

                        <label>Customer provided note:</label>
                        <p>{{ $order->billing_details->instructions }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-0 m-0 w-100">
            <div class="col-12 col-md-12 col-lg-7">
                <h6 class="h6-luxe">Items</h6>
    
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th id="th-row">Item</th>
                                <th id="th-row" width="1%">Cost</th>
                                <th id="th-row" width="1%">Qty</th>
                                <th id="th-row" width="1%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($order->products as $order_product)
                                <tr>
                                    <td><img width="75px" src="{{ asset('storage/'. $order_product->product->preview_image) }}" alt=""> {{ $order_product->product->name }} {{ ($order_product->variant_name ? ' - '. $order_product->variant_value : '')}}</td>
                                    <td width="1%">${{ $order_product->price }}</td>
                                    <td width="1%">{{ $order_product->quantity }}</td>
                                    <td width="1%">${{ $order_product->price * $order_product->quantity }}</td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Products Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
    
                <hr>
                <div class="row w-100 p-0 m-0 justify-content-end">
                    <div class="col-6 d-flex justify-content-end">
                        <div>
                            <p class="text-right">Items Subtotal: ${{ $order->payment->sub_total }}</p>
                            @if($order->payment->coupon_code)
                                <p class="text-right">Coupon Discount: ${{ $order->payment->coupon_code }}</p>
                            @endif
                            <p class="text-right">Order Total: ${{ $order->payment->total_price }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-5">
                <h6 class="h6-luxe">Custom Fields</h6>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th id="th-row">Name</th>
                                <th id="th-row">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($order->inputs as $field)
                                <tr>
                                    <td>{{ $field->input_name }}</td>
                                    <td>{{ $field->input_value }}</td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="2">No Fields Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection