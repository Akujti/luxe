<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image'
    ];


    public function templates()
    {
        return $this->hasMany(Template::class, 'category_id');
    }
}
