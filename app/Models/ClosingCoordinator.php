<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClosingCoordinator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'sentence',
        'status'
    ];

    protected $appends = ['imageUrl'];

    public function getImageUrlAttribute()
    {
        return asset($this->image);
    }
}
