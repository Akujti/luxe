<?php

namespace App\Models\Video;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoFolders extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(VideoFolders::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(VideoFolders::class, 'parent_id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'folder_id');
    }
}
