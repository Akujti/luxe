@extends('admin.layouts.app', ['active' => 'Products'])
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('css')
    <style>
        label:not(.label) {
            font-family: 'gothicbold';
            margin-bottom: 20px;
        }

        .label {
            font-family: 'gothicregular';
            margin-bottom: 20px;
        }

        .title {
            font-family: 'gothicbold';
        }

        .checkbox {
            font-family: 'gothicregular';
        }

        .btn-rounded {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-box {
            display: flex;
            justify-content: space-between;
        }

        .image-box-image {
            position: relative;
            width: 70px;
        }

        .image-box-image img {
            width: 100%;
        }

        .image-box-image button {
            position: absolute;
            top: -16px;
            right: -17px;
        }

        #preview-image {
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5 border-bottom pb-4">
                @if ($product)
                    <div>
                        <h5 class="h5-luxe">Edit Product: {{ $product->name }}</h5>
                        <a href="{{ route('luxe_store.single_product', $product->slug) }}">Go to product</a>
                    </div>
                @else
                    <h5 class="h5-luxe">Add New Product</h5>
                @endif
            </div>
            <div class="row m-0 w-100">
                <form
                    action="{{ $product ? route('admin.luxe_store.products.update') : route('admin.luxe_store.products.create') }}"
                    method="POST" enctype="multipart/form-data" class="row p-0 m-0 w-100">
                    @if ($product)
                        @method('put')
                        <input type="hidden" name="id" value="{{ $product->id }}">
                    @endif
                    @csrf
                    <div class="row p-0 m-0 w-100">
                        <div class="row p-0 m-0 d-flex col-12">
                            <div class="form-group col-12 col-md-6 col-lg-2">
                                <label for="">Preview Image</label>
                                @if ($product)
                                    <div class="row m-0 p-0 mb-3">
                                        <img src="{{ asset('storage/' . $product->preview_image) }}" id="preview-image"
                                            width="150px" height="150px" alt="" onclick="toggleImage()">
                                        <input type="file" name="preview_image" id="preview-image-input"
                                            style="display:none" onchange="onFileChanged(this)">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Thumbnail</label>
                                        <input class="form-control p-1" type="file" id="formFile" name="thumbnail">
                                    </div>
                                @else
                                    <input type="file" name="preview_image" required>
                                    <div class="my-3">
                                        <label for="formFile" class="form-label">Thumbnail</label>
                                        <input class="form-control p-1" type="file" id="formFile" name="thumbnail">
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-12 col-md-6 col-lg-4">
                                <label for="">Product Title</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ $product ? $product->name : '' }}" required>
                            </div>
                            <div class="form-group col-12 col-lg-2 col-md-4">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control" step="0.01"
                                    value="{{ $product ? $product->price : '' }}">
                            </div>
                            <div class="form-group col-12 col-lg-2 col-md-4">
                                <label for="">Sale Price</label>
                                <input type="number" name="sale_price" class="form-control" step="0.01"
                                    value="{{ $product ? $product->sale_price : '' }}">
                            </div>
                            <div class="form-group col-12 col-lg-2 col-md-4">
                                <label for="">Stock</label>
                                <input type="number" name="stock" class="form-control mb-3"
                                    value="{{ $product ? $product->stock : '' }}" required>
                                <input type="number" name="min_stock" class="form-control"
                                    value="{{ $product ? $product->min_stock : '' }}" placeholder="Min Stock">
                            </div>
                            <div class="form-group col-12 col-lg-2 col-md-4">
                                <label for="">Notify Email</label>
                                <input type="email" name="notify_email" class="form-control"
                                    value="{{ $product ? $product->notify_email : '' }}">
                            </div>
                        </div>
                        <div class="row p-0 m-0 d-flex col-12">
                            <div class="form-group col-12 col-xl-4">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" rows="6">{{ $product ? $product->description : '' }}</textarea>
                            </div>
                            <div class="form-group col-12 col-xl-4">
                                <label for="">Short Description</label>
                                <textarea name="description_2" class="form-control" rows="6">{{ $product ? $product->description_2 : '' }}</textarea>
                            </div>
                            <div class="form-group col-12 col-xl-4">
                                <label for="">Verbiage Text</label>
                                <textarea name="verbiages_text" class="form-control" rows="6">{{ $product ? $product->verbiages_text : '' }}</textarea>
                            </div>
                        </div>
                        <div class="border-bottom mt-3 mb-4 col-12"></div>
                        <div class="row m-0 d-flex col-12">
                            <div class="col-12 col-md-6">
                                <label for="">Categories</label>
                                @if ($product)
                                    @foreach ($categories as $category)
                                        <div class="col-12 p-0 m-0 checkbox">
                                            <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                                {{ in_array($category->slug, $product->categories->pluck('slug')->toArray()) ? 'checked' : '' }}>
                                            {{ $category->name }}
                                        </div>
                                    @endforeach
                                @else
                                    @foreach ($categories as $category)
                                        <div class="col-12 p-0 m-0 checkbox">
                                            <input type="checkbox" class="checkbox-input" name="categories[]"
                                                value="{{ $category->id }}" required onchange="category_checkbox()">
                                            {{ $category->name }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Attribute name</label>
                                    <input type="text" name="variant_name" class="form-control"
                                        value="{{ $product && $product->variants->count() ? $product->variants[0]->variant_name : '' }}">
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <label for="">Values</label>
                                    <button class="btn btn-luxe btn-rounded" type="button" onclick="add_new_variant()">+
                                    </button>
                                </div>
                                <div class="col-12 p-0" id="variants-box">
                                    @if ($product && $product->variants->count())
                                        @if ($product->variants[0]->values->count())
                                            @foreach ($product->variants[0]->values as $key => $row)
                                                <div
                                                    class="d-flex justify-content-between align-items-end mt-2 variant-box">
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="" class="label">Name</label>
                                                        <input type="text"
                                                            name="variant_values[{{ $key }}][value]"
                                                            class="form-control" value="{{ $row->value }}">
                                                    </div>
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="" class="label">Price</label>
                                                        <input type="number" step="0.01"
                                                            name="variant_values[{{ $key }}][price]"
                                                            class="form-control" value="{{ $row->price }}">
                                                    </div>
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="" class="label">Sale Price</label>
                                                        <input type="number" step="0.01"
                                                            name="variant_values[{{ $key }}][sale_price]"
                                                            class="form-control" value="{{ $row->sale_price }}">
                                                    </div>
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="" class="label">Stock</label>
                                                        <input type="number"
                                                            name="variant_values[{{ $key }}][stock]"
                                                            class="form-control" value="{{ $row->stock }}">
                                                    </div>
                                                    <div class="form-group col p-0 m-0 mr-1">
                                                        <label for="" class="label">Min Stock</label>
                                                        <input type="number"
                                                            name="variant_values[{{ $key }}][min_stock]"
                                                            class="form-control" value="{{ $row->min_stock }}">
                                                    </div>
                                                    <button class="btn btn-danger btn-rounded" type="button"
                                                        onclick="remove_variant(this)">-
                                                    </button>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mt-3 mb-4 col-12"></div>
                        <div class="row m-0 d-flex col-12">
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="p-0 m-0">Form inputs</label>
                                    <button class="btn btn-luxe btn-rounded" type="button" onclick="add_new_input()">+
                                    </button>
                                </div>
                                <div class="col-12 mt-2 p-0" id="form-box">
                                    @if ($product && $product->inputs->count())
                                        @foreach ($product->inputs as $key => $row)
                                            <div class="col-12 p-0 mt-2 input-box d-flex align-items-center">
                                                <input type="text" name="form[{{ $key }}][input_name]"
                                                    class="form-control mr-2" value="{{ $row->input_name }}">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        @if ($row->is_file) checked @endif
                                                        name="form[{{ $key }}][is_file]" value="1"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label label-is-file p-0 m-0"
                                                        for="flexCheckDefault">
                                                        Is File
                                                    </label>
                                                </div>
                                                <button class="btn btn-danger btn-rounded" type="button"
                                                    onclick="remove_input(this)">-
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="p-0 m-0">Images</label>
                                    <button class="btn btn-luxe btn-rounded" type="button" onclick="add_new_image()">+
                                    </button>
                                </div>
                                <div id="images-box" class="col-12 p-0">
                                    @if ($product && $product->images->count())
                                        <div class="col-12 p-0 mt-2 image-box">
                                            <div class="row p-0 m-0 w-100">
                                                @foreach ($product->images as $row)
                                                    <div
                                                        class="col-6 col-lg-2 col-md-4 p-0 d-flex justify-content-center image-box-col mb-4">
                                                        <div class="image-box-image">
                                                            <img src="{{ asset('storage/' . $row->image) }}"
                                                                height="70px" alt="">
                                                            <button class="btn btn-danger btn-rounded" type="button"
                                                                onclick="remove_image_ajax(this, {{ $row->id }})">
                                                                &times;
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mt-3 mb-4 col-12"></div>
                    <div class="row d-flex justify-content-center mt-5 mb-5 col-12">
                        @if ($product)
                            <button class="btn btn-luxe">Edit Product</button>
                        @else
                            <button class="btn btn-luxe">Create Product</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>


@section('js')
    <script>
        var variant_count = "<?php if ($product && $product->variants->count()) {
            echo $product->variants[0]->values->count();
        } else {
            echo 0;
        } ?>"

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
                '<label for="" class="label">Name</label>' +
                '<input type="text" name="variant_values[' + variant_count + '][value]" class="form-control">' +
                '</div>' +
                '<div class="form-group col p-0 m-0 mr-1">' +
                '<label for="" class="label">Price</label>' +
                '<input type="number" step="0.01" name="variant_values[' + variant_count +
                '][price]" class="form-control">' +
                '</div>' +
                '<div class="form-group col p-0 m-0 mr-1">' +
                '<label for="" class="label">Sale Price</label>' +
                '<input type="number" step="0.01" name="variant_values[' + variant_count +
                '][sale_price]" class="form-control">' +
                '</div>' +
                '<div class="form-group col p-0 m-0 mr-1">' +
                '<label for="" class="label">Stock</label>' +
                '<input type="number" name="variant_values[' + variant_count + '][stock]" class="form-control">' +
                '</div>' +
                '<div class="form-group col p-0 m-0 mr-1">' +
                '<label for="" class="label">Min Stock</label>' +
                '<input type="number" name="variant_values[' + variant_count + '][min_stock]" class="form-control">' +
                '</div>' +
                '<button class="btn btn-danger btn-rounded" type="button" onclick="remove_variant(this)">-</button>' +
                '</div>'
            $('#variants-box').append(html)
            variant_count++
        }

        function add_new_input() {
            let numRows = 1;
            $('#form-box').each(function() {
                numRows = $('.input-box', $(this)).length
            })
            var html = `<div class="col-12 p-0 mt-2 input-box d-flex align-items-center p-0">
                <input type="text" name="form[${numRows}][input_name]" class="form-control mr-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="form[${numRows}][is_file]" value="1" id="flexCheckDefault">
                    <label class="form-check-label label-is-file p-0 m-0" for="flexCheckDefault">
                        Is File
                    </label>
                </div>
                <button class="btn btn-danger btn-rounded" type="button" onclick="remove_input(this)">-</button>
                </div>`
            $('#form-box').append(html)
        }

        function add_new_image() {
            var html = '<div class="col-12 p-0 mt-2 image-box">' +
                '<input type="file" name="images[]">' +
                '<button class="btn btn-danger btn-rounded" type="button" onclick="remove_image(this)">-</button>' +
                '</div>'
            $('#images-box').append(html)
        }

        function remove_variant(e) {
            $(e).parents('.variant-box').remove()
        }

        function remove_input(e) {
            $(e).parents('.input-box').remove()
        }

        function remove_image(e) {
            $(e).parents('.image-box').remove()
        }

        function remove_image_ajax(e, image_id) {
            $.ajax({
                url: '{{ route('admin.luxe_store.products.delete_image_product') }}?id=' + image_id,
                type: 'delete',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    if (output) {
                        $(e).parents('.image-box-col').remove()
                    }
                }
            });
        }

        function toggleImage() {
            $('#preview-image-input').click()
        }

        function onFileChanged(e) {
            const [file] = e.files
            console.log(URL.createObjectURL(file))
            if (file) {
                $('#preview-image').attr("src", URL.createObjectURL(file));
            }
        }

        function category_checkbox() {
            var checkboxes = $('.checkbox-input');

            if ($('.checkbox-input:checked').length > 0) {
                checkboxes.removeAttr('required');
            } else {
                checkboxes.attr('required', 'required');
            }
        }
    </script>
@endsection
@endsection
<style>
.label-is-file {
    width: 63px;
}
</style>
