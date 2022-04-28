<?php

namespace App\Models\Video;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoComment extends Model
{
    use HasFactory;
    protected $table = 'video_comments';

    protected $fillable = ['user_id', 'video_id', 'comment'];

    protected $with = ['user'];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
