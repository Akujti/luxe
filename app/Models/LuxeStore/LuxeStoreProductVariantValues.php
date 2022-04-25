<?php

namespace App\Models\LuxeStore;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxeStoreProductVariantValues extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'image', 'price', 'sale_price', 'variant_id'];
}
