@extends('admin.layouts.app')

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
            @if($product)
                <h5 class="h5-luxe">Edit Product: {{ $product->name }}</h5>
            @else 
                <h5 class="h5-luxe">Add new Product</h5>
            @endif
        </div>

        <div class="row m-0 w-100 mb-5">
            <ul class="nav nav-tabs row m-0 mx-2 mx-md-0 mx-lg-0 mx-xl-0 w-100" id="myTab" role="tablist">
                <li class="nav-item col-6 col-md-3 m-0 p-0">
                    <a class="nav-link mrsm active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true">Details</a>
                </li>
                <li class="nav-item col-6 col-md-3 m-0 p-0">
                    <a class="nav-link" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="false">Categories & Attributes</a>
                </li>
                <li class="nav-item col-6 col-md-3 m-0 p-0">
                    <a class="nav-link" id="form-inputs-tab" data-toggle="tab" href="#form-inputs" role="tab" aria-controls="form-inputs" aria-selected="false">Form inputs & Images</a>
                </li>
            </ul>
        </div>
       
        <div class="row m-0 w-100">
            <form action="{{ $product ? route('admin.luxe_store.products.update') : route('admin.luxe_store.products.create') }}" method="POST" enctype="multipart/form-data" class="w-100">
                @if($product)
                    @method('put')
                    <input type="hidden" name="id" value="{{ $product->id }}">
                @endif
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active text-center" id="details" role="tabpanel">
                        <div class="d-flex">
                            <div class="form-group col">
                                @if($product)
                                    <div class="row m-0 p-0 justify-content-center mb-3">
                                        <img src="{{ asset('storage/'. $product->preview_image) }}" width="150px" height="150px" alt="">
                                    </div>
                                @endif
                                <label for="">Preview Image</label>
                                <input type="file" name="preview_image">
                            </div>
                            <div class="form-group col">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{  $product ? $product->name : '' }}">
                            </div>
                            <div class="form-group col">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control" value="{{  $product ? $product->price : '' }}">
                            </div>
                            <div class="form-group col">
                                <label for="">Sale Price</label>
                                <input type="text" name="sale_price" class="form-control" value="{{  $product ? $product->sale_price : '' }}">
                            </div>
                            <div class="form-group col">
                                <label for="">Stock</label>
                                <input type="text" name="stock" class="form-control" value="{{  $product ? $product->stock : '' }}">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-group col">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" rows="8">{{  $product ? $product->description : '' }}</textarea>
                            </div>
                            <div class="form-group col">
                                <label for="">Short Description</label>
                                <textarea name="description_2" class="form-control" rows="6">{{  $product ? $product->description_2 : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="categories" role="tabpanel">
                        <div class="row m-0 d-flex">
                            <div class="col">
                                <h4>Categories</h4>

                                @if($product)
                                    @foreach($categories as $category)
                                        <div class="col-12">
                                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" {{ in_array($category->slug, $product->categories->pluck('slug')->toArray()) ? 'checked': '' }}> {{ $category->name }}
                                        </div>
                                    @endforeach
                                @else
                                    @foreach($categories as $category)
                                        <div class="col-12">
                                            <input type="checkbox" name="categories[]" value="{{ $category->id }}"> {{ $category->name }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <h4>Attributes</h4>

                                <div class="form-group">
                                    <label for="">Attribute name</label>
                                    <input type="text" name="variant_name" class="form-control" value="{{ ($product && $product->variants->count()) ? $product->variants[0]->variant_name : '' }}">
                                </div>
                                
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>Values</h5> 
                                    <button class="btn btn-primary" type="button" onclick="add_new_variant()">+</button>
                                </div>
                                <div class="col-12" id="variants-box">
                                    @if($product && $product->variants->count())
                                        @if($product->variants[0]->values->count())
                                            @foreach($product->variants[0]->values as $key => $row)
                                                <div class="d-flex justify-content-between align-items-end mt-2 variant-box">
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="">Name</label>
                                                        <input type="text" name="variant_values[{{ $key }}][value]" class="form-control" value="{{ $row->value }}">
                                                    </div>
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="">Price</label>
                                                        <input type="number" name="variant_values[{{ $key }}][price]" class="form-control" value="{{ $row->price }}">
                                                    </div>
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="">Sale Price</label>
                                                        <input type="number" name="variant_values[{{ $key }}][sale_price]" class="form-control" value="{{ $row->sale_price }}">
                                                    </div>
                                                    <button class="btn btn-danger" type="button" onclick="remove_variant(this)">-</button>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="form-inputs" role="tabpanel">
                        <div class="row m-0 d-flex">
                            <div class="col-6">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>Form inputs</h5> 
                                    <button class="btn btn-primary" type="button" onclick="add_new_input()">+</button>
                                </div>
                                <div class="col-12 mt-2" id="form-box">
                                    @if($product && $product->inputs->count())
                                        @foreach($product->inputs as $row)
                                            <div class="col-12 mt-2 input-box d-flex">
                                                <input type="text" name="form[]" class="form-control mr-2" value="{{ $row->input_name }}">
                                                <button class="btn btn-danger" type="button" onclick="remove_input(this)">-</button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>Images</h5> 
                                    <button class="btn btn-primary" type="button" onclick="add_new_image()">+</button>
                                </div>
                                <div id="images-box" class="col-12">
                                    <div class="col-12 p-0 mt-2">
                                        <input type="file" name="images[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-5 mb-5">
                    @if($product)
                        <button class="btn btn-luxe">Edit</button>
                    @else 
                        <button class="btn btn-luxe">Add</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>


@section('js')
<script>
    var variant_count = "<?php if($product && $product->variants->count()) { echo $product->variants[0]->values->count(); } else { echo 0; } ?>"
    function create() {
        $('.create-event').modal('show');
    };
    function delete_event(canva) {
        $('.delete-event').modal('show');
        $('.delete-event').find('#canva_id').val(canva.id);
    };
    function update_event(canva) {
        $('.update-event').modal('show');
        $('.update-event').find('#canva_id').val(canva.id);
        $('.update-event').find('#title').val(canva.name);
    };

    function add_new_variant() {
        var html = '<div class="d-flex justify-content-between align-items-end mt-2 variant-box">' +
                    '<div class="form-group col p-0 m-0 mr-1">' +
                        '<label for="">Name</label>' +
                        '<input type="text" name="variant_values[' + variant_count + '][value]" class="form-control">' +
                    '</div>' +
                    '<div class="form-group col p-0 m-0 mr-1">' +
                        '<label for="">Price</label>' +
                        '<input type="number" name="variant_values[' + variant_count + '][price]" class="form-control">' +
                    '</div>' +
                    '<div class="form-group col p-0 m-0 mr-1">' +
                        '<label for="">Sale Price</label>' +
                        '<input type="number" name="variant_values[' + variant_count + '][sale_price]" class="form-control">' +
                    '</div>' +
                    '<button class="btn btn-danger" type="button" onclick="remove_variant(this)">-</button>' +
                '</div>'
        $('#variants-box').append(html)
        variant_count++
    }

    function add_new_input() {
        var html = '<div class="col-12 mt-2 input-box d-flex">' +
                        '<input type="text" name="form[]" class="form-control mr-2">' +
                        '<button class="btn btn-danger" type="button" onclick="remove_input(this)">-</button>' +
                    '</div>'
        $('#form-box').append(html)
    }
    function add_new_image() {
        var html = '<div class="col-12 p-0 mt-2">'+
                        '<input type="file" name="images[]">' +
                    '</div>'
        $('#images-box').append(html)
    }

    function remove_variant(e) {
        $(e).parents('.variant-box').remove()
    }

    function remove_input(e) {
        $(e).parents('.input-box').remove()
    }
</script>
@endsection
@endsection
