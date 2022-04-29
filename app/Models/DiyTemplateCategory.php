<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiyTemplateCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'order'
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function categories()
    {
        return $this->hasMany(DiyTemplateCategory::class, 'parent_id');
    }

    public function templates()
    {
        return $this->hasMany(DiyTemplate::class, 'category_id');
    }
}
