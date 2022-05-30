<?php

namespace App\Models\Feed;

use App\Models\Feed\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    protected $with = ['agent'];

    public function posts() {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function agent() {
        return $this->belongsTo(User::class);
    }
}
