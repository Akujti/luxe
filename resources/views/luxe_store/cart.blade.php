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
        .cart-footer, .input-remove {
            padding: 0px;
        }
        .coupon {
            width: 100% !important;
            margin-top: 10px;
        }
        .product-details h5 {
            font-size: 17px;
        }
        .form-group-quantity {
            width: 100% !important;
        }
    }
    @media (max-width: 992px) {
        .cart-footer {
            padding: 0px !important;
        }
    }
    #mr-top {
        display: none;
    }
    #img {
        object-fit: cover;
    }
    .h4-luxe {
        font-family: 'gothicbold';
    }
    .box-summary {
        box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 6%);
        padding: 20px;
        border-radius: 10px;
    }
    .bold {
        font-family: 'gothicbold';
    }
    .form-delete {
        margin-top: 12px !important;
    }
    .btn-danger {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0 justify-content-center">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Your Cart</h5>
            <a href="{{ route('luxe_store.index') }}" id="back"><img src="/images/files/left-icon.svg" alt=""> Back to shop</a>
        </div>

        <div class="col-12 col-md-12 col-lg-8 row p-0 m-0">
            <div class="row p-0 m-0 w-100 align-items-center d-none d-md-flex d-lg-flex">
                <p class="bold col-md-9 col-lg-10 p-0">Item</p>
            </div>
            @forelse($cart_data as $key => $product)
                <div class="w-100">
                    <div class="row p-0 m-0 justify-content-between mt-2">
                        <div class="col-12 col-md-6 d-flex align-items-center pl-0">
                            <div class="mr-4 d-none d-md-flex d-lg-flex">
                                <img src="{{ asset('storage/'. $product['item']['preview_image']) }}" class="rounded" id="img" width="150px" height="150px" alt="">
                            </div>
                            <div class="w-100 d-flex justify-content-between d-md-block d-lg-block product-details">
                                <h5 class="h5-luxe">{{ $product["item_name"] }}</h5>
                                <h6 class="h6-luxe">$ {{$product["item_price"]}} </h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end input-remove">
                            <div class="form-group form-group-quantity">
                                <label for="" class="bold">Quantity</label>
                                <div class="input-group">
                                    <input type="number" onchange="update_cart(this, {{ $key }})" id="quantity-item" class="form-control d-inline-block" style="width:100px" value="{{ $product["item_quantity"] }}">
                                </div>
                            </div>
    
                            <form action="{{ route('luxe_store.deletecart') }}" method="POST" class="m-0 p-0 form-delete">
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

            <div class="w-50 coupon mt-4">
                <form action="{{ route('luxe_store.apply_coupon') }}" method="POST">
                    @csrf
                    <div class="form-group w-100">
                        <label for="" class="bold">Have a coupon code?</label>
                        <div class="input-group">
                            <div class="d-flex w-100 p-0 m-0">
                                <input type="text" name="code" class="form-control mr-2" placeholder="Coupon code..">
                                <button type="submit" class="btn btn-luxe">Apply</button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>

            
        </div>

        <div class="col-12 col-md-12 col-lg-4 cart-footer">
            <div class="row mt-2 m-0 box-summary py-4">
                <div class="w-100 d-flex justify-content-between align-items-center mb-5 pb-3 border-bottom">
                    <h5 class="h5-luxe">Summary</h5>
                </div>
                <div class="col-12 col-md-12 text-right p-0">
                    <div class="d-flex justify-content-between">
                        <p class="p-luxe font-weight-bold">Items {{count($cart_data)}}</p>
                        <p>${{ $sub_total }}</p>
                    </div>
                    @if($coupon_code)
                        <div class="d-flex justify-content-between">
                            <p class="p-luxe font-weight-bold">Coupon</p>
                            <p>${{ $coupon_code['price'] }}</p>
                        </div>
                    @endif
                    
                    <div class="d-flex justify-content-between border-top pt-3 mt-3">
                        <h5 class="h5-luxe">Total</h5>
                        <p class="font-weight-bold">${{ $total_price }}</p>
                    </div>

                    <a class="btn btn-luxe btn-block mt-5 mb-3" href="{{ route('luxe_store.checkout') }}">Proceed to checkout</a>
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
