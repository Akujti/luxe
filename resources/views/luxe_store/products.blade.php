@extends('layouts.app')

@section('css')
<style>
    img {
        width: 100%;
        object-fit: cover;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0 p-0">
        @forelse($category->products as $product)
            <div class="col-3">
                <img src="{{ asset('storage/'. $product->preview_image) }}" alt="">
                <h5>{{ $product->name }}</h5>
                <a href="{{ route('luxe_store.single_product', ['product_slug' => $product->slug]) }}">Click here</a>
            </div>
        @empty
            <p>No Products</p>
        @endforelse
    </div>
 
    <form action="{{ route('admin.luxe_store.products.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="2">
        <input type="text" name="name"><br>
        <input type="number" name="stock"><br>
        <input type="text" name="price"><br>
        <input type="file" name="preview_image">


        <h1>Categories</h1>
        <input type="text" name="categories[]" value="1">
        <input type="text" name="categories[]" value="3">
        <br><br>
        <h1>Variants</h1>

        <input type="text" name="variant_name" value="Size">
        <br>
        <h3>Values</h3>
        <input type="text" name="variant_values[0][value]" value="Large">
        <input type="text" name="variant_values[0][price]" value="100">
        <input type="text" name="variant_values[1][value]" value="1121">
        <input type="text" name="variant_values[1][price]" value="1020">
        <input type="text" name="variant_values[2][value]" value="sadsadsa">
        <input type="text" name="variant_values[2][price]" value="1020">

        <h1>Form</h1>

        <input type="text" name="form[]" value="Name">
        <input type="text" name="form[]" value="Email">
        <input type="text" name="form[]" value="Test">

        <button type="submit">Done</button>
    </form>
    <br><br>
    <form action="{{ route('admin.luxe_store.products.delete') }}" method="POST">
        @method('delete')
        @csrf
        <input type="hidden" name="id" value="14">
        <button type="submit">Delete</button>
    </form>
</div>
@endsection
