<?php

namespace App\Models\Feed;

use App\Models\Feed\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function posts() {
        return $this->morphedByMany(Post::class, 'taggable');
    }
}
