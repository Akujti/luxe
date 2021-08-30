<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'type',
        'folder_id',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}
