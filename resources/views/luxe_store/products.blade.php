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
    <div class="row box-title p-0 m-0 justify-content-between align-items-center">
        <h3 class="text-center">{{ $category->name }}</h3>
        <p class="p-show-pages mr-2">Showing {{ $products->firstItem() .'-'. $products->lastItem() .' of '. $products->total() }} results</p>
    </div>
    <div class="row my-5 justify-content-start">
        @forelse($products as $product)
            <div class="col d-flex justify-content-center">
                <div class="template-box">
                    <a href="{{ route('luxe_store.single_product', ['product_slug' => $product->slug]) }}">
                        <img src="{{ asset('storage/'. $product->preview_image) }}" alt="No image found" width="100%" height="303px"
                        onerror="this.src='{{asset('images/no-image.png')}}';">
                        <div class="template-details">
                            <p>{{ $product->name }}</p>
                            <p id="template-details-price" class="mt-4">
                                @if(!$product->variants->count())
                                    {{ '$'. $product->price }}
                                @else
                                    {{
                                        ($product->variants[0]->max_value_price == $product->variants[0]->min_value_price) ?
                                        '$'.$product->variants[0]->max_value_price :
                                        '$' . $product->variants[0]->min_value_price . ' - $'. $product->variants[0]->max_value_price
                                    }}
                                @endif
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p>No Products found.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>

@endsection