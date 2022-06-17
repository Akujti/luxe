<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiyTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'url',
        'order'
    ];

    protected $appends = ['url'];

    public function category()
    {
        return $this->belongsTo(DiyTemplateCategory::class, 'category_id');
    }

    public function templates()
    {
        return $this->hasMany(DiyTemplate::class, 'category_id');
    }

    public function getImageAttribute($image)
    {
        if (str_starts_with($image, 'http'))
            return $image;
        // return asset('storage/' . $image);
        return 'https://myluxehub.com/storage/' . $image;
    }

    public function getUrlAttribute($url)
    {
        if (str_starts_with($url, 'http'))
            return $url;
        return url('/') . '/' . $url;
    }
}
