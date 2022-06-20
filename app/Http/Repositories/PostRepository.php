<?php

namespace App\Http\Repositories;

use App\Models\Feed\Tag;
use App\Models\Feed\Post;

class PostRepository
{
    public function all($nr, $sort, $with = ['image', 'tag', 'comment', 'like', 'agent']) {
        $postData = Post::orderBy('created_at', $sort)
        ->with($with)
        ->take($nr)
        ->get();

        $data = [];
        foreach($postData as $key => $row) {
            $data[$key]['row'] = $row;
            $data[$key]['comments'] = $row->comment()->take(8)->get();
        }

        $rows = Post::count();

        return ['data' => $data, 'rows' => $rows];
    }

    public function getById($id, $with = ['image', 'tag', 'comment', 'like', 'agent'])
    {
        $data = [
            'row' => Post::with($with)->findOrFail($id),
            'comments' => Post::findOrFail($id)->comment()->take(8)->get()
        ];

        return ['data' => $data];
    }

    public function create(array $req) {
        $row = new Post;

        $row->fill($req['basicInfo']);
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

    public function update(Post $row, array $req) {
        $row->fill($req['basicInfo']);
        $row->save();

        if(isset($req['remove_tags'])) {
            foreach($req['remove_tags'] as $tag) {
                $id = Tag::find($tag);
                if($id) {
                    $id->delete();
                }
            }
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