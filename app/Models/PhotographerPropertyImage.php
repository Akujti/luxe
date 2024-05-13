<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerPropertyImage extends Model
{
    use HasFactory;

    protected $fillable = ['photographer_property_id', 'small', 'medium', 'large'];
    protected $appends = ['url_small', 'url_medium', 'url_large'];

    public function property()
    {
        return $this->belongsTo(PhotographerProperty::class);
    }

    public function getUrlSmallAttribute()
    {
        return asset('storage/' . $this->small);
    }

    public function getUrlMediumAttribute()
    {
        return asset('storage/' . $this->medium);
    }

    public function getUrlLargeAttribute()
    {
        return asset('storage/' . $this->large);
    }
}
