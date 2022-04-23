@extends('admin.layouts.app', ['active' => 'Orders'])

@section('css')
<style>
    th,
    td {
        text-align: center;
    }
    #td-row, #th-row {
        width: 17% !important;
        text-align: center;
        border: none !important
    }
    #td-row {
        height: 90px;
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
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Orders</h5>
        </div>
        <div class="table-responsive">
                <table class="table p-0 m-0">
                    <thead>
                        <tr id="tr-row">
                            <th id="th-row">Order ID</th>
                            <th id="th-row">Agent</th>
                            <th id="th-row">No. of products</th>
                            <th id="th-row">Amount</th>
                            <th id="th-row">Created at</th>
                            <th id="th-row">Status</th>
                        </tr>
                    </thead>
                </table>

            <div class="card-body w-100 px-0">
                <div id="accordion" class="p-0">
                    @forelse($orders as $key => $order)
                    <div class="card">
                        <div id="heading{{ $key }}" class="card-header p-0 m-0">
                            <button data-toggle="collapse" style="background:white" data-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}" class="btn btn p-0 m-0 w-100 border-none collapsed">
                                <table id="article-table" class="table m-0">
                                    <tbody>
                                        <tr id="tr-row">
                                            <td id="td-row">#{{ $order->id }}</td>
                                            <td id="td-row">{{ $order->agent_name }} {{ $order->agent_surname }} </td>
                                            <td id="td-row">{{ $order->products->count() }} </td>
                                            <td id="td-row">${{ $order->payment->total_price }}</td>
                                            <td id="td-row">{{ $order->created_at->diffForHumans() }}</td>
                                            <td id="td-row">{{ $order->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </button>
                        </div>
                        <div id="collapse{{ $key }}" aria-labelledby="heading{{ $key }}" data-parent="#accordion" class="collapse" aria-expanded="false" style="">
                            <div class="card-body">
                                <table class="table rounded w-100" style="border:1px solid rgb(237, 237, 237);">
                                    <tbody class="w-100">
                                        <tr class="row w-100 d-flex justify-content-center">
                                            <td class="col-md-12 col-lg-6 row d-flex justify-content-between">
                                                <div class="col-md-6">
                                                    <p class="title-item">General</p>
                                                    <div class="tr d-flex justify-content-start">
                                                        <p>Billing phone:</p>
                                                        <p class="ml-2">{{ $order->billing_details->phone}}</p>
                                                    </div>

                                                    <div class="tr d-flex justify-content-start">
                                                        <p>Billing Email:</p>
                                                        <p class="ml-2">{{ $order->billing_details->email}}</p>
                                                    </div>
                                                
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="title-item">Payment type</p>
                                                    <div class="tr d-flex justify-content-start">
                                                        <p>Payment method:</p>
                                                        <p class="ml-2"> PayPal </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="title text-white rounded"> Products </p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Product</th>
                                                                        <th>Image</th>
                                                                        <th>Quantity</th>
                                                                        <th>Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse($order->products as $order_product)
                                                                        <tr>
                                                                            <td>{{ $order_product->product->name }} {{ ($order_product->variant_name ? ' - '. $order_product->variant_value : '')}}</td>
                                                                            <td><img width="75px" src="{{ asset('storage/'. $order_product->product->preview_image) }}" alt=""></td>
                                                                            <td>{{ $order_product->quantity }}</td>
                                                                            <td>${{ $order_product->price }}</td>
                                                                        </tr>
                                                                    @empty
                                                                    <tr>
                                                                        <td>No Products Found.</td>
                                                                    </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-md-12 col-lg-6 row">
                                                <div class="col-12">
                                                    <p class="title rounded"> Fields </p>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Input Name</th>
                                                                <th>Input Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($order->inputs as $input)
                                                                <tr>
                                                                    <td>{{ $input->input_name }}</td>
                                                                    <td>{{ $input->input_value }}</td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td>No Fields Found.</td>
                                                                </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-12 mt-5">
                                                    <p class="title p rounded"> Reciept of payments </p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Total Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>{{ $order->created_at }}</td>
                                                                        <td> € {{ $order->payment->total_price }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No Orders Found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex w-100 justify-content-center">
        {{ $orders->links() }}
    </div>
</div>
@endsection