<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventGallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link', 'date'];

//    protected $dates = ['date'];

    public function images()
    {
        return $this->hasMany(EventGalleryImage::class);
    }
}
