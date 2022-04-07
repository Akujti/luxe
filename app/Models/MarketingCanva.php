<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingCanva extends Model
{
    use HasFactory;

    protected $table = 'marketing_canva';

    protected $fillable = [
        'title',
        'image'
    ];

    public function categories()
    {
        return $this->hasMany(MarketingCanvaCategory::class, 'category_id');
    }
}
