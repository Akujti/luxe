<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerPropertyImage extends Model
{
    use HasFactory;

    protected $fillable = ['photographer_property_id', 'small', 'medium', 'large'];

    public function property()
    {
        return $this->belongsTo(PhotographerProperty::class);
    }
}
