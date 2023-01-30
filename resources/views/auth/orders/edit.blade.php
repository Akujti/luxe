@extends('layouts.app')

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
    <form class="row m-0" action="{{ route('my_orders.edit.put', $order->id )}}" method="POST">
        @csrf
        @method('PUT')
        <div class="w-100 d-flex justify-content-between align-items-center mb-2">
            <h5 class="h5-luxe bold">Order #{{ $order->id }} details</h5>
            <button class="btn-luxe py-2 px-4" type="submit">Save Changes</button>
        </div>
        
        <div class="w-100">
            <p>Payment via PayPal. Paid on {{ $order->created_at }}</p>
            <hr>
            <div class="row p-0 m-0">
                <div class="col-4 pl-0">
                    <h5 class="bold">General</h5>
                    <div class="form-group">
                        <label for="">Date created:</label>
                        <div class="input-group">
                            <p>{{ $order->created_at}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Status:</label>
                        <div class="input-group d-flex align-items-center">
                            <p class="pr-2">{{ $order->status}}</p>
                        </div>
                        @if($order->status == 'Request Info')
                        <div class="input-group">
                            <p>{{ $order->request_info }}</p>
                        </div>
                        @endif
                    </div>
                    @if($order->status == 'Request Info')
                    <div class="form-group">
                        <label for="">Response:</label>
                        <div class="input-group">
                            <textarea class="form-control w-100" name="request_info_response" rows="7"></textarea>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-4">
                    <h5 class="bold">Billing</h5>
                    <div>
                        <div class="form-group">
                            <label for="">First Name:</label>
                            <input type="text" class="form-control" name="billing_first_name" value="{{ $order->billing_details->agent_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name:</label>
                            <input type="text" class="form-control" name="billing_last_name" value="{{ $order->billing_details->agent_surname }}">
                        </div>
                        <div class="form-group">
                            <label for="">Street Address:</label>
                            <input type="text" class="form-control" name="billing_street_address" value="{{ $order->billing_details->street_address }}">
                        </div>
                        <div class="form-group">
                            <label for="">City:</label>
                            <input type="text" class="form-control" name="billing_city" value="{{ $order->billing_details->city }}">
                        </div>
                        <div class="form-group">
                            <label for="">Zip/Postal code:</label>
                            <input type="text" class="form-control" name="billing_zip_code" value="{{ $order->billing_details->zip_code }}">
                        </div>

                        <label>Email address:</label>
                        <p><input type="text" class="form-control" name="billing_email" value="{{ $order->billing_details->email }}"></p>

                        <label>Phone:</label>
                        <p><input type="text" class="form-control" name="billing_phone" value="{{ $order->billing_details->phone }}"></p>
                    </div>
                </div>

                <div class="col-4">
                    <h5 class="bold">Shipping</h5>
                    <div>
                    <label>First Name:</label>
                        <p><input type="text" class="form-control" name="shipping_first_name" value="{{ $order->shipping_details->agent_name }}"></p>
                        <label>Last Name:</label>
                        <p><input type="text" class="form-control" name="shipping_last_name" value="{{ $order->shipping_details->agent_surname }}"></p>
                        <label>Street Address:</label>
                        <p><input type="text" class="form-control" name="shipping_street_address" value="{{ $order->shipping_details->street_address }}"></p>
                        <label>City:</label>
                        <p><input type="text" class="form-control" name="shipping_city" value="{{ $order->shipping_details->city }}"></p>
                        <label>Zip/Postal code:</label>
                        <p><input type="text" class="form-control" name="shipping_zip_code" value="{{ $order->shipping_details->zip_code }}"></p>

                        <label>Email address:</label>
                        <p><input type="text" class="form-control" name="shipping_email" value="{{ $order->shipping_details->email }}"></p>

                        <label>Phone:</label>
                        <p><input type="text" class="form-control" name="shipping_phone" value="{{ $order->shipping_details->phone }}"></p>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0 m-0 w-100 mt-4 pt-4">
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

            <div class="col-12 col-md-5 col-lg-5">
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
                            @forelse($order->inputs as $key =>  $field)
                                <tr>
                                    <input type="hidden" class="form-control" name="custom[{{$key}}][id]" value="{{ $field->id }}">
                                    <td><input type="text" class="form-control" name="custom[{{$key}}][input_name]" value="{{ $field->input_name }}"></td>
                                    <td><input type="text" class="form-control" name="custom[{{$key}}][input_value]" value="{{ $field->input_value }}"></td>
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
</form>
</div>
@endsection