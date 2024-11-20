<?php

namespace App\Models;

use Carbon\Carbon;
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

    protected $appends = ['days_on_market'];

    public function getDaysOnMarketAttribute()
    {
        return $this->list_date ? Carbon::parse($this->list_date)->diffInDays(now()) : null;
    }
}
