@extends('layouts.app', ['active' => 'Store'])

@section('css')
<style>
    @media (max-width: 576px) {
        .container-fluid {
            margin:60px auto !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
        #quantity-item {
            width: 100% !important;
        }
        #mr-top {
            display: flex !important;
        }
    }
    #mr-top {
        display: none;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0 justify-content-center">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Your Cart</h5>
        </div>

        <div class="w-100 col-12 col-md-12 col-lg-8 row p-0 m-0">
            @forelse($cart_data as $key => $product)
                <div class="col-12">
                    <div class="row p-0 m-0 justify-content-between mt-2">
                        <div class="col-12 col-md-6 d-flex align-items-center">
                            <div class="mr-4 d-none d-md-flex d-lg-flex">
                                <img src="{{ asset('storage/'. $product['item']['preview_image']) }}" class="rounded" height="150px" alt="">
                            </div>
                            <div class="w-100 d-flex justify-content-between d-md-block d-lg-block">
                                <h5 class="h5-luxe">{{ $product["item_name"] }}</h5>
                                <h6 class="h6-luxe">$ {{$product["item_price"]}} </h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end">
                            <input type="number" onchange="update_cart(this, {{ $key }})" id="quantity-item" class="form-control d-inline-block" style="width:100px" value="{{ $product["item_quantity"] }}">
    
                            <form action="{{ route('luxe_store.deletecart') }}" method="POST" class="m-0 p-0">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="key" value="{{ $key }}">
                                <button type="submit" class="btn btn-danger ml-4">&times;</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 d-flex justify-content-between">
                        <p>Cart is empty.</p>
                </div>
            @endforelse
        </div>
                
        <div class="mt-5 col-12" id="mr-top"></div>

        <div class="col-12 col-md-12 col-lg-8 cart-footer">
            <div class="row mt-2 m-0 p-0">
                <div class="col-12 col-md-8">
                    <form action="{{ route('luxe_store.apply_coupon') }}" method="POST">
                        @csrf
                        <div class="d-flex col-lg-6 col-12 p-0 m-0">
                            <input type="text" name="code" class="form-control mr-2" placeholder="Coupon code..">
                            <button type="submit" class="btn btn-luxe">Apply</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4 text-right">
                    <div class="d-flex justify-content-between">
                        <p class="p-luxe">Subtotal</p>
                        <p>${{ $sub_total }}</p>
                    </div>
                    @if($coupon_code)
                        <div class="d-flex justify-content-between">
                            <p class="p-luxe">Coupon</p>
                            <p>${{ $coupon_code['price'] }}</p>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <h4 class="h4-luxe">Total</h4>
                        <p>${{ $total_price }}</p>
                    </div>

                    <a class="btn btn-luxe" href="{{ route('luxe_store.checkout') }}">Process to checkout</a>
                </div>
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
