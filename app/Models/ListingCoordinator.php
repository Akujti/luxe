<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingCoordinator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'image', 'sentence', 'status'
    ];

    protected $appends = ['imageUrl', 'webUrl'];

    public function getImageUrlAttribute()
    {
        return asset($this->image);
    }

    public function getWebUrlAttribute()
    {
        return route('listing-coordinators.show', $this->id);
    }
}
