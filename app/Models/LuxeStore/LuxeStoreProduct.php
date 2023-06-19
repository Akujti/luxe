<?php

namespace App\Models\LuxeStore;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Log;

class LuxeStoreProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'description_2',
        'price',
        'sale_price',
        'stock',
        'preview_image',
        'second_thumbnail',
        'verbiages_text'
    ];

    protected $with = ['images', 'variants'];

    public function categories()
    {
        return $this->belongsToMany(LuxeStoreCategory::class, 'luxe_store_product_categories', 'product_id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(LuxeStoreProductImage::class, 'product_id');
    }

    public function variants()
    {
        return $this->hasMany(LuxeStoreProductVariants::class, 'product_id');
    }

    public function inputs()
    {
        return $this->hasMany(LuxeStoreProductForm::class, 'product_id')->latest();
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        if ($this->id) {
            // $this->attributes['slug'] = LuxeStoreProduct::where([
            //     ['slug', Str::slug($value)],
            //     ['id', '!=', $this->id]
            // ])->count() ? Str::slug($value) . '-' . uniqid() : Str::slug($value);
        } else {
            $this->attributes['slug'] = LuxeStoreProduct::where('slug', Str::slug($value))->count() ? Str::slug($value) . '-' . uniqid() : Str::slug($value);
        }
    }
}
