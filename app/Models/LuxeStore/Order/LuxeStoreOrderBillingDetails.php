<?php

namespace App\Models\LuxeStore\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxeStoreOrderBillingDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_name', 'agent_surname', 'company_name', 'country',
        'street_address', 'city', 'state', 'zip_code', 'phone', 'email', 'instructions'
    ];
}
