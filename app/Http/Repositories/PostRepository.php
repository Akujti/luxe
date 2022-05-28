<?php

namespace App\Http\Repositories;

use App\Models\Feed\Post;

class PostRepository
{
    public function all() {
        return Post::orderBy('created_at', 'desc')
        ->with(['image', 'tag', 'comment', 'like', 'agent'])
        ->get();
    }
}