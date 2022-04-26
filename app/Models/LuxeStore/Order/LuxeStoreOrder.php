<?php

namespace App\Models\LuxeStore\Order;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LuxeStoreOrder extends Model
{
    use HasFactory;


    protected $fillable = ['information_seller', 'email', 'phone', 'agent_name', 'agent_surname', 'status'];

    protected $with = ['products', 'payment'];

    public function products() {
        return $this->hasMany(LuxeStoreOrderProduct::class, 'order_id');
    }

    public function payment() {
        return $this->hasOne(LuxeStoreOrderPayment::class, 'order_id');
    }

    public function inputs() {
        return $this->hasMany(LuxeStoreOrderFormInputs::class, 'order_id');
    }

    public function billing_details() {
        return $this->hasOne(LuxeStoreOrderBillingDetails::class, 'order_id');
    }

    public function shipping_details() {
        return $this->hasOne(LuxeStoreOrderShippingDetails::class, 'order_id');
    }
}
