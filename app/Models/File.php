<?php

namespace App\Models;

use App\Models\Folder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'file',
        'type',
        'folder_id',
        'thumbnail'
    ];

    protected $appends = ['fileUrl', 'thumbnailUrl', 'type_file'];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }

    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file);
    }

    public function getTypeFileAttribute()
    {
        $array = explode('.', $this->file);
        return end($array);
    }

    public function getThumbnailUrlAttribute()
    {
        return asset('storage/' . $this->thumbnail);
    }
}
