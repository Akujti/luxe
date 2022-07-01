<?php

namespace App\Models\Video;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoViews extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'video_id'];
}
