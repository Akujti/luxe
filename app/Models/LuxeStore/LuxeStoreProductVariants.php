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

    public function values()
    {
        return $this->hasMany(LuxeStoreProductVariantValues::class, 'variant_id');
    }

    public function getMaxValuePriceAttribute()
    {
        $data = [];

        foreach ($this->values()->get() as $row) {
            $data[] = ($row->sale_price && ($row->sale_price < $row->price)) ? $row->sale_price : $row->price;
        }

        return $data ? max($data) : '';
    }

    public function getMinValuePriceAttribute()
    {
        $data = [];

        foreach ($this->values()->get() as $row) {
            $data[] = ($row->sale_price && ($row->sale_price < $row->price)) ? $row->sale_price : $row->price;
        }

        return  $data ? min($data) : '';
    }
}
