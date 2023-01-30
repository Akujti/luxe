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
        <div class="m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Orders</h5>
            </div>
            <form action="" method="get" class="row">
                <div class="col-md-2 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Agent Name"
                        value="{{ isset($_GET['name']) ? $_GET['name'] : '' }}">
                </div>
                <div class="col-md-2 form-group">
                    <input type="text" name="price" class="form-control" placeholder="Price"
                        value="{{ isset($_GET['price']) ? $_GET['price'] : '' }}">
                </div>
                <div class="col-md-2 form-group">
                    <input type="date" name="date" class="form-control" placeholder="Date"
                        value="{{ isset($_GET['date']) ? $_GET['date'] : '' }}">
                </div>
                <div class="col-md-2 form-group">
                    <select name="product" class="form-control">
                        <option value>Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <select name="status" class="form-control">
                        <option value>Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Paid">Paid</option>
                        <option value="Request Info">Request Info</option>
                        <option value="Updated Info">Updated Info</option>
                        <option value="Shipped">Shipped</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <button class="btn btn-luxe w-100 form-control" type="submit">Search</button>
                </div>
            </form>
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
                                <td id="td-row">{{ @$order->user->profile ? @$order->user->profile->fullname : '' }}
                                </td>
                                <td id="td-row">{{ $order->products->count() }} </td>
                                <td id="td-row">${{ $order->payment->total_price }}</td>
                                <td id="td-row">{{ $order->created_at->setTimezone('America/New_York') }}</td>
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
