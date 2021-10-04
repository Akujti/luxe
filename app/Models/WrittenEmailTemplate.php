<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WrittenEmailTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function items()
    {
        return $this->hasMany(WrittenEmailTemplateItem::class, 'folder_id');
    }
}
