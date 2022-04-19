<?php

namespace App\Models\LuxeStore\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxeStoreOrderPayment extends Model
{
    use HasFactory;

    protected $table = 'luxe_store_order_payment';

    protected $fillable = ['sub_total', 'coupon_code', 'total_price'];
}
