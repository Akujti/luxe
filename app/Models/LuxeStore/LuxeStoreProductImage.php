<?php

namespace App\Models\LuxeStore;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxeStoreProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'product_id'];
}
