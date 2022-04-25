<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingCanvaTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'url'
    ];

    public function category()
    {
        return $this->belongsTo(MarketingCanvaCategory::class, 'category_id');
    }
}
