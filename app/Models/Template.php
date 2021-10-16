<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(MarketingCategory::class, 'category_id');
    }

    public function fields()
    {
        return $this->hasMany(TemplateField::class, 'template_id');
    }

    public function submits()
    {
        return $this->hasMany(TemplateSubmit::class);
    }
}
