@extends('layouts.app', ['active' => 'Store'])

@section('css')
<style>
    @media screen and (max-width: 500px) {
        .container-fluid {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
        .pd-r {
            padding-right: 0px;
        }
        .pd-l {
            padding-left: 0px !important;
        }
        .md-l {
            margin-left: 0px !important;
        }
    }
    .go_to_cart p {
        margin: 0px;
        padding: 0px;
        font-family: 'gothicbold';
        margin-right: 30px;
    }
    ul {
        margin-bottom: 0px !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0 p-0 luxe-store">
        @if(Session::has('message'))
            <div class="col-12 go_to_cart mb-5">
                <div class="d-flex align-items-center">
                    <p>Successfully added to cart</p>
                    <a href="{{ route('luxe_store.cart') }}" class="btn btn-luxe">Go to Cart</a>
                </div>
            </div>
        @endif
        <div class="col-12 col-md-12 col-lg-5 pl-0 pd-r">
            <div class="row m-0 p-0">
                <div class="col-12 pl-0 pd-r">
                    <img src="{{ asset('storage/'. $product->preview_image) }}" id="preview-image" alt="">
                </div>
            </div>
            <div class="row m-0 p-0 mt-3">
                @foreach($product->images as $image)
                    <div class="col-2" style="cursor:pointer">
                        <img src="{{ asset('storage/'. $image->image) }}" width="100%" height="60px" onclick="make_preview_image(this)">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7 single-product-details pl-4 pd-l pd-r">
            <h3 id="title" class="mb-4 mt-5">{{ $product->name }}</h3>

            <form method="POST" action="{{ route('luxe_store.addtocart') }}">
                @csrf 

                @if(!$product->variants->count())
                    <div class="d-flex align-items-center mb-4">
                        @if($product->sale_price)
                            <p id="price" class="mr-3">${{ $product->sale_price }}</p>
                            <p id="sale-price"><del>${{ $product->price }}</del></p>
                        @else
                            <p id="price">${{ $product->price }}</p>
                        @endif
                    </div>
                    <p id="short-desc" class="mb-4">{!! nl2br($product->description_2) !!}</p>
                @else
                    <p id="price" class="mb-4">{{
                        ($product->variants[0]->max_value_price == $product->variants[0]->min_value_price) ?
                        '$'.$product->variants[0]->max_value_price :
                        '$'.$product->variants[0]->min_value_price . ' - $'. $product->variants[0]->max_value_price
                    }}</p>
                    <p id="short-desc" class="mb-4">{!! nl2br($product->description_2) !!}</p>

                    <div id="show-variants" class="col-12 col-md-8">
                        @foreach($product->variants as $variant)
                        <div class="d-flex justify-content-center align-items-center w-75">
                            <p class="p-0 m-0 mr-3" id="variant-name"><b>{{ $variant->variant_name }}</b></p>
        
                            <select name="variant_value" id="select-option" class="form-control" onchange="option_value()" required>
                                <option value="">Choose an option</option>
                                @foreach($variant->values as $value)
                                    <option value="{{ $value->value }}">{{ $value->value }}</option>
                                @endforeach
                            </select>

                            <p id="clear" class="m-0 p-0 ml-3" onclick="clear_selection()">Clear</p>
                        </div>
                        @endforeach
                    </div>
                @endif


                <div id="show-option-value" class="d-flex align-items-center mt-3"></div>
                
                @if($product->inputs->count())
                    <div class="col-12 col-md-8 p-0 mt-3 form-inputs">
                        @foreach($product->inputs as $input)
                            <div class="form-group">
                                <label for="">{{ $input->input_name }}</label>
                                <input type="text" name="form[{{ $input->input_value }}]" class="form-control" required>
                            </div>
                        @endforeach
                    </div>
                @endif
            
                <div class="row p-0 m-0 d-flex align-items-center mb-4 mt-4">
                    <div class="col-12 col-md-5 col-lg-4 d-flex align-items-center pd-r pd-l">
                            <input type="number" id="quantity-input" name="quantity" class="form-control py-2 mr-2" value="1" max="{{ $product->stock }}">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button class="btn btn-luxe py-2 px-4" type="submit" style="border-radius:10px;" id="btn-submit" {{ (!$product->stock) ? 'disabled': ''}}>Add To cart</button>
                    </div>
                    <div class="col-12 col-md-7 d-flex align-items-center md-l pd-r pd-l">
                        @if($product->stock)
                            @if($product->stock < 500000)
                                <p id="price" class="p-0 m-0 stock-product">{{ $product->stock }}</p>
                            @endif
                            <p id="categories" class="p-0 m-0 ml-1 stock-product">in stock</p>
                        @else
                            <p id="out-of-stock" class="p-0 m-0 ml-1 stock-product">Out of Stock</p>
                        @endif
                        <div class="stock-variant d-flex justify-content-between align-items-center"></div>
                        

                    </div>
                </div>

                <p id="categories">Categories: @foreach($product->categories as $key => $category) {{ $category->name }} @if($key == ($product->categories->count() - 1)) @else , @endif  @endforeach</p>

                <p id="short-desc">{!! nl2br($product->description) !!}</p>
            </form>
        </div>
    </div>
</div>

@section('js')
<script>
    function option_value() {
        $('.stock-product').removeClass('d-none')
        $('.stock-variant').removeClass('d-flex')
        $('.stock-variant').addClass('d-none')
        $('#show-option-value').html('')
        var option = document.getElementById("select-option").value;

        if(option) {
            var options = JSON.parse(JSON.stringify(<?php echo json_encode(@$product->variants[0]->values) ?>))
            var row = options.filter(x => x.value == option)[0]
            
            if(row.sale_price) {
                $('#show-option-value').append('<p id="price" class="mr-3">$' + row.sale_price + '</p>')
                $('#show-option-value').append('<p id="sale-price"><del>$' +row.price + '</del></p>')
            } else {
                $('#show-option-value').append('<p id="price">$' + row.price + '</p>')
            }
            if(row.stock) {
                if(row.stock < 500000) {
                    $('.stock-variant').html('<p id="price" class="p-0 m-0">' + row.stock + '</p><p id="categories" class="p-0 m-0 ml-1">in stock</p>')
                } else {
                    $('.stock-variant').html('<p id="categories" class="p-0 m-0 ml-1">in stock</p>')
                }
                $('.stock-variant').removeClass('d-none')
                $('.stock-variant').addClass('d-flex')
                $('.stock-product').addClass('d-none')
            } else {
                $('.stock-variant').html('<p id="out-of-stock" class="p-0 m-0 ml-1">Out of Stock</p>')
                $('#btn-submit').attr('disabled', true)
                $('.stock-variant').removeClass('d-none')
                $('.stock-product').addClass('d-none')
            }
            $('#clear').show();
        } else {
            $('#show-option-value').text('')
            $('#clear').hide();
        }
    }

    function clear_selection() {
        document.getElementById("select-option").value = '';
        $('#clear').toggle();
        $('#show-option-value').text('')
        $('.stock-product').removeClass('d-none')
        $('.stock-variant').removeClass('d-flex')
        $('.stock-variant').addClass('d-none')
    }

    function make_preview_image(e) {
        $('#preview-image').attr('src', e.src)
    }
</script>
@endsection
@endsection
