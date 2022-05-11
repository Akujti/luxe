@extends('admin.layouts.app', ['active' => 'Orders'])

@section('css')
    <style>
        th,
        td {
            text-align: center;
        }

        #td-row,
        #th-row {
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
            border-top: 1px solid rgba(0, 0, 0, .125);
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

            #td-row,
            #th-row {
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Agent</th>
                            <th>No. Items</th>
                            <th>Amount</th>
                            <th>Created at</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($orders as $order)
                            <tr id="tr-row">
                                <td id="td-row">#{{ $order->id }}</td>
                                <td id="td-row">{{ @$order->user->profile ? @$order->user->profile->fullname : '' }} </td>
                                <td id="td-row">{{ $order->products->count() }} </td>
                                <td id="td-row">${{ $order->payment->total_price }}</td>
                                <td id="td-row">{{ $order->created_at->diffForHumans() }}</td>
                                <td id="td-row">{{ $order->status }}</td>
                                <td id="td-row"><a class="btn btn-link"
                                        href="{{ route('admin.orders.show', $order->id) }}">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex w-100 justify-content-center">
            {{ $orders->links() }}
        </div>
    </div>
@endsection
