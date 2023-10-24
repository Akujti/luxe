<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingCoordinator extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'email', 'image', 'sentence', 'status'
    ];

    protected $appends = ['imageUrl', 'webUrl'];

    public function getImageUrlAttribute()
    {
        if ($this->image)
            return asset($this->image);
        return 'https://ui-avatars.com/api/?name=' . $this->name . '&size=512&background=F7F7F7';
    }

    public function getWebUrlAttribute()
    {
        return route('listing-coordinators.show', $this->id);
    }
}
