<?php

namespace App\Models\LuxeStore;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxeStoreProductVariants extends Model
{
    use HasFactory;

    protected $fillable = ['variant_name', 'product_id'];

    protected $with = ['values'];

    protected $appends = ['max_value_price', 'min_value_price'];

    public function values() {
        return $this->hasMany(LuxeStoreProductVariantValues::class, 'variant_id');
    }

    public function getMaxValuePriceAttribute() {
        return $this->values()->get()->max('price');
    }

    public function getMinValuePriceAttribute() {
        return $this->values()->get()->min('price');
    }
}
