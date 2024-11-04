<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id',
        'main_image_url',
        'address',
        'source',
        'type',
        'living_area',
        'price',
        'beds',
        'baths',
        'garages',
        'list_date',
        'pool',
        'waterfront',
    ];
}
