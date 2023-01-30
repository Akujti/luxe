<?php

namespace App\Models\LuxeStore\Order;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LuxeStoreOrder extends Model
{
    use HasFactory;


    protected $fillable = ['information_seller', 'status', 'request_info', 'request_info_response'];

    protected $with = ['products', 'payment'];

    public function products()
    {
        return $this->hasMany(LuxeStoreOrderProduct::class, 'order_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }
    public function payment()
    {
        return $this->hasOne(LuxeStoreOrderPayment::class, 'order_id');
    }

    public function inputs()
    {
        return $this->hasMany(LuxeStoreOrderFormInputs::class, 'order_id');
    }

    public function billing_details()
    {
        return $this->hasOne(LuxeStoreOrderBillingDetails::class, 'order_id');
    }

    public function shipping_details()
    {
        return $this->hasOne(LuxeStoreOrderShippingDetails::class, 'order_id');
    }
}
