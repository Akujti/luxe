<?php

namespace App\Models\LuxeStore\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxeStoreOrderFormInputs extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'input_name',
        'input_value',
        'is_file'
    ];
}
