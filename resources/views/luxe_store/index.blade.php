@extends('layouts.app')
@section('css')
<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }

    .row img {
        object-fit: cover;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row box-title p-0 m-0 justify-content-end">
        <p class="p-show-pages mr-2">Showing {{ $categories->firstItem() .'-'. $categories->lastItem() .' of '. $categories->total() }} results</p>
    </div>
    <div class="row my-5 justify-content-start">
        @forelse($categories as $category)
            <div class="col d-flex justify-content-center">
                <div class="template-box">
                    <a href="{{ route('luxe_store.products.index', ['category_slug' => $category->slug]) }}">
                        <img src="{{ asset('storage/'. $category->image) }}" alt="No image found" width="100%" height="303px"
                        onerror="this.src='{{asset('images/no-image.png')}}';">
                        <div class="template-details">
                            <p>{{ $category->name }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p>No Categories found.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center">
        {{ $categories->links() }}
    </div>
</div>

@endsection