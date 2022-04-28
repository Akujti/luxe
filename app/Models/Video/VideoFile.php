<?php

namespace App\Models\Video;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoFile extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'file', 'type', 'video_id'];

    protected $appends = ['file_url'];

    public function getFileUrlAttribute() {
        if($this->file) {
            return asset('storage/'. $this->file);
        }
    }
}
