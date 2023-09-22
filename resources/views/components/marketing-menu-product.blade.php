<div>
    @isset($product)
        <div class="option row">
            <div class="col-md-9 pl-0">
                <div class="option-title">
                    {{ $product->name }}
                </div>
                <div class="option-desc">
                    {{ Illuminate\Support\Str::limit($product->description, 430, '...') }}
                </div>
                <div class="option-price">
                    {{ $product->price && $product->price > 0 ? '$' . $product->price : 'FREE' }}
                </div>

                <div class="mt-4">
                    <a class="btn" href="{{ '/store/product/' . $product->slug }}">ORDER NOW</a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <img src="{{ '/storage/' . $product->second_thumbnail }}" alt="" class="w-100 rounded"
                    style="height: 200px;object-fit:cover;">
            </div>
        </div>
    @endisset
</div>
