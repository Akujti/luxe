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
        @forelse($categories as $category)
            <div class="col-3">
                <img src="{{ asset('storage/'. $category->image) }}" alt="">
                <h5>{{ $category->name }}</h5>
                <a href="{{ route('luxe_store.products.index', ['category_slug' => $category->slug]) }}">Click here</a>
            </div>
        @empty
            <p>No Category</p>
        @endforelse
    </div>

    
    <form action="{{ route('admin.luxe_store.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="2">
        <input type="text" name="name"><br>
        <input type="file" name="image">

        <button type="submit">Done</button>
    </form>

    <form action="{{ route('admin.luxe_store.delete') }}" method="POST">
        @method('delete')
        @csrf
        <input type="hidden" name="id" value="2">
        <button type="submit">Delete</button>
    </form>
</div>
@endsection
