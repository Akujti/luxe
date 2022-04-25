<?php

namespace App\Models\LuxeStore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LuxeStoreCouponCode extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'price', 'expired'];
}
