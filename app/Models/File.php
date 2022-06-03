<?php

namespace App\Models;

use App\Models\Folder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'type',
        'folder_id',
        'thumbnail'
    ];

    protected $appends = ['fileUrl'];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }

    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file);
    }
}
