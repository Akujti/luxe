<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerProperty extends Model
{
    use HasFactory;

    protected $fillable = ['photographer_id', 'address'];

    public function images()
    {
        return $this->hasMany(PhotographerPropertyImage::class);
    }
}
