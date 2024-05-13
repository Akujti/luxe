<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventGalleryImage extends Model
{
    use HasFactory;

    protected $fillable = ['event_gallery_id', 'small', 'medium', 'large'];
    protected $appends = ['url_small', 'url_medium', 'url_large'];

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
