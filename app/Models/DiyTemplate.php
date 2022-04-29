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

    public function category()
    {
        return $this->belongsTo(DiyTemplateCategory::class, 'category_id');
    }
}
