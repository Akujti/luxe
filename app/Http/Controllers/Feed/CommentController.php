<?php

namespace App\Http\Controllers\Feed;

use Exception;
use App\Models\Feed\Tag;
use App\Models\Feed\Post;
use Illuminate\Support\Str;
use App\Models\Feed\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Feed\Comment\AddRequest;
use App\Http\Requests\Feed\Comment\DeleteRequest;
use App\Http\Requests\Feed\Comment\UpdateRequest;

class CommentController extends Controller
{
    public function getAll(Request $req) {
        $nr = $req->input('nr', 8);

        $comments = Post::find($req->post_id)->comment()->take($nr)->get();
        $rows = Post::find($req->post_id)->comment()->count();
        return response()->json([
            'comments' => $comments,
            'rows' => $rows
        ]);
    }
    public function create(AddRequest $req) {
        try {
            $row = Post::findOrFail($req->post_id);
            $comment = $row->comment()->create([
                'body' => $req->body,
                'parent_id' => $req->parent_id,
                'user_id' => auth()->id()
            ]);

            if($req->hasFile('file')) {
                $file = $req->file('file');
                $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/feed', $name, 'public');
                $comment->image()->create(['path' => $name]);
            }
            if($req->has('tags')) {
                foreach($req->tags as $tag) {
                    $id = Tag::where('agent_id', $tag['id'])->first();
                    if($id) {
                        $comment->tag()->attach(['agent_id' => $id->id]);
                    } else {
                        $comment->tag()->create(['agent_id' => $tag['id']]);
                    }
                }
            }

            return response()->json($comment);
        } catch (Exception $e) {
            return 'back with error';
        }
    }

    public function update(UpdateRequest $req) {
        try {
            $row = Comment::findOrFail($req->id);
            $row->body = $req->body;
            $row->save();

            if($req->hasFile('file')) {
                $row->image()->delete();
                $file = $req->file('file');
                $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/feed', $name, 'public');
                $row->image()->create(['path' => $name]);
            }
            if($req->has('tags')) {
                $row->tag()->detach();
                foreach($req->tags as $tag) {
                    $id = Tag::where('name', $tag)->first();
                    if($id) {
                        $row->tag()->attach(['name' => $id->id]);
                    } else {
                        $row->tag()->create(['name' => $tag]);
                    }
                }
            }
            
            return $row;
        } catch (Exception $e) {
            return 'back with error';
        }
    }

    public function delete(DeleteRequest $req) {
        try {
            $row = Comment::findOrFail($req->id);
            if($row->user_id == auth()->id()) {
                $row->delete();
                return response()->json(true);
            }
            return response()->json(false);
        } catch (Exception $e) {
            return 'back with error';
        }
    }
}
