@extends('layouts.app')

@section('css')
<style>
    th,td {
        text-align: center;
    }
</style>
@endsection
@section('content')
{{ $canva_delete = '' }}
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Your Cart</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>SubTotal</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($cart_data as $key => $product)
                    <tr>
                        <td>{{ $product["item_id"] }}</td>
                        <td>{{ $product["item_name"] }}</td>
                        <td><img src="{{ asset('storage/'. $product['item']['preview_image']) }}" width="90px"></td>
                        <td>${{ $product["item_price"] }}</td>
                        <td><input type="number" class="form-control d-inline-block" style="width:100px" value="{{ $product["item_quantity"] }}"></td>
                        <td>${{ $product["item_price"] * $product["item_quantity"] }}</td>
                        <td>
                            <form action="{{ route('luxe_store.deletecart') }}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="key" value="{{ $key }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Cart is empty.</td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
        <!-- <div class="w-100 d-flex justify-content-end">
            <div class="col-4 text-right">
                <button type="submit" class="btn btn-luxe">Update</button>
            </div>
        </div> -->

        <div class="w-100 d-flex justify-content-end">
            <div class="col-4 text-right">
                <h4>Total</h4>

                <p>${{ $total_price }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
