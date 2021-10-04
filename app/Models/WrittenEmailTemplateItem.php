<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WrittenEmailTemplateItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'folder_id'
    ];

    public function folder()
    {
        return $this->belongsTo(WrittenEmailTemplate::class);
    }
}
