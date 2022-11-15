<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCheckoutInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agent_name',
        'agent_surname',
        'street_address',
        'city',
        'state',
        'zip',
        'phone',
        'email',
        'shipping_agent_name',
        'shipping_agent_surname',
        'shipping_street_address',
        'shipping_city',
        'shipping_state',
        'shipping_zip',
        'shipping_phone',
        'shipping_email',
    ];
}
