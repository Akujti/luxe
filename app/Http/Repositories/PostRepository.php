<?php

namespace App\Http\Repositories;

use App\Models\Feed\Tag;
use App\Models\Feed\Post;

class PostRepository
{
    public function all($nr, $with = ['image', 'tag', 'comment', 'like', 'agent']) {
        return Post::orderBy('created_at', 'desc')
        ->with($with)
        ->take($nr)
        ->get();
    }

    public function create(array $req) {
        $row =  new Post;

        $row->fill($req['basicInfo']);
        $row->agent_id = auth()->id();
        $row->save();

        if(isset($req['files'])) {
            $row->image()->createMany($req['files']);
        }

        if(isset($req['tags'])) {
            foreach($req['tags'] as $tag) {
                $id = Tag::where('agent_id', $tag)->first();
                if($id) {
                    $row->tag()->attach(['agent_id' => $id->id]);
                } else {
                    $row->tag()->create(['agent_id' => $tag]);
                }
            }
        }

        return 1;
    }
}