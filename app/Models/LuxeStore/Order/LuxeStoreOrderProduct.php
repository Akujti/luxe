<?php

namespace App\Models\LuxeStore\Order;

use App\Models\LuxeStore\LuxeStoreProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxeStoreOrderProduct extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'price', 'variant_name', 'variant_value', 'quantity'];

    protected $with = ['product'];

    public function product()
    {
        return $this->belongsTo(LuxeStoreProduct::class, 'product_id');
    }
}
