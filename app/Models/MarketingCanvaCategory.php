<?php

namespace App\Models;

use App\Models\MarketingCanva;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarketingCanvaCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'image'
    ];

    public function canva()
    {
        return $this->belongsTo(MarketingCanva::class, 'category_id');
    }

    public function templates()
    {
        return $this->hasMany(MarketingCanvaTemplate::class, 'template_id');
    }
}
