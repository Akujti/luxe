<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerProperty extends Model
{
    use HasFactory;

    protected $fillable = ['address'];

    public function images()
    {
        return $this->belongsTo(PhotographerPropertyImage::class);
    }
}
