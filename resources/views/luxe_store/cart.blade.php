@extends('layouts.app')

@section('css')
<style>
    th,td {
        text-align: center;
    }
</style>
@endsection
@section('content')
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
                        <td><input type="number" onchange="update_cart(this, {{ $key }})" class="form-control d-inline-block" style="width:100px" value="{{ $product["item_quantity"] }}"></td>
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

        <div class="w-100 d-flex justify-content-between">
            <div>
                <form action="{{ route('luxe_store.apply_coupon') }}" method="POST">
                    @csrf
                    <input type="text" name="code">
                    <button type="submit">Apply Coupon</button>
                </form>
            </div>
            <div class="col-4 text-right">
                <h4>Subtotal</h4>

                <p>${{ $sub_total }}</p>

                @if($coupon_code)
                <h4>Coupon</h4>

                <p>Discount: $ {{ $coupon_code['price'] }}</p>
                @endif

                <h3>Total: ${{$total_price}}</h3>

                <a class="btn btn-luxe" href="{{ route('luxe_store.checkout') }}">Process to checkout</a>
            </div>
        </div>
    </div>
</div>
<script>
    function update_cart(e, key) {
        
        var url = '{{ route('luxe_store.order.update') }}';
        $.ajax({
            url: url,
            type: 'PUT',
            data: {
                "_token": "{{ csrf_token() }}",
                "key": key,
                "quantity": e.value
            },
            success: function(data) {
                if(data == true) {
                    window.location.reload()
                } else {
                    toastr.error("Stock is limited: Max quantity is: " + data);
                }
            }
        })
    }
</script>
@endsection
