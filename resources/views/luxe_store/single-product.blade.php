@extends('layouts.app')
<style>
    img {
        width: 100%;
        object-fit: cover;
    }
</style>
@section('content')
<div class="container-fluid">
    <div class="row m-0 p-0">
        <div class="col-md-6">
            <div class="row m-0 p-0">
                <div class="col-12">
                    <img src="{{ asset('storage/'. $product->preview_image) }}" alt="">
                </div>
            </div>
            <div class="row m-0 p-0 mt-3">
                @foreach($product->images as $image)
                    <div class="col-2">
                        <img src="{{ asset('storage/'. $image->image) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>Short Desc.: {{ $product->description }}</p>
            <p>Long Desc.: {{ $product->description_2 }}</p>

            @if(!$product->variants->count())
                <p>Price: {{ $product->price }} $</p>
            @else
                <p>Price: {{ 
                    ($product->variants[0]->max_value_price == $product->variants[0]->min_value_price) ?
                    $product->variants[0]->max_value_price :
                    $product->variants[0]->min_value_price . ' - '. $product->variants[0]->max_value_price
                  }} $</p>
                @foreach($product->variants as $variant)
                <div class="d-flex justify-content-center align-items-center">
                    <p class="p-0 m-0 mr-5"><b>{{ $variant->variant_name }}</b></p>

                    <select name="" id="select-option" class="form-control" onchange="option_value()">
                        <option value="">Choose an option</option>
                        @foreach($variant->values as $value)
                            <option value="{{ $value->value }}">{{ $value->value }}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
            @endif


            <p id="show-option-value"></p>
            
            @if($product->inputs->count())
            <div class="w-100 mt-5">
                @foreach($product->inputs as $input)
                    <div class="form-group">
                        <label for="">{{ $input->input_name }}</label>
                        <input type="text" name="form[{{ $input->input_value }}]">
                    </div>
                @endforeach
            </div>
            @endif

            <button class="btn btn-luxe">Add To cart</button>

        </div>
    </div>
</div>

@section('js')
<script>
    function option_value() {
        var option = document.getElementById("select-option").value;

        if(option) {
            var options = JSON.parse('<?php echo json_encode(@$product->variants[0]->values) ?>')
            var row = options.filter(x => x.value == option)[0]
    
            $('#show-option-value').text(row.price + ' $')
        } else {
            $('#show-option-value').text('')
        }
    }
</script>
@endsection
@endsection
