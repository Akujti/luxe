<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarketingCanva extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'marketing_canva';

    protected $fillable = [
        'title',
        'image',
        'parent_id'
    ];

    protected $appends = ['imageUrl'];

    public function categories()
    {
        return $this->hasMany(MarketingCanva::class, 'parent_id');
    }

    public function templates()
    {
        return $this->hasMany(MarketingCanvaTemplate::class, 'category_id')->orderBy('order', 'ASC');
    }

    public function featured_templates()
    {
        return $this->hasMany(MarketingCanvaTemplate::class, 'category_id')->whereFeatured(true)->orderBy('created_at', 'DESC');
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
