<?php

namespace App\Http\Controllers\Feed;

use Exception;
use App\Models\Feed\Post;
use App\Models\Feed\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Feed\Like\AddRequest;
use App\Http\Requests\Feed\Like\DeleteRequest;
use App\Http\Requests\Feed\Like\AddCommentRequest;
use App\Http\Requests\Feed\Like\DeleteCommentRequest;

class LikeController extends Controller
{
    public function create(AddRequest $req) {
        try {
            $row = Post::findOrFail($req->post_id);
            $like = $row->like()->create([
                'user_id' => 2 // auth()->id()
            ]);
            
            return $like;
        } catch (Exception $e) {
            return 'back with error';
        }
    }
    public function createByComment(AddCommentRequest $req) {
        try {
            $row = Comment::findOrFail($req->comment_id);
            $like = $row->like()->create([
                'user_id' => 2 // auth()->id()
            ]);
            
            return $like;
        } catch (Exception $e) {
            return 'back with error';
        }
    }

    public function delete(DeleteRequest $req) {
        try {
            $row = Post::findOrFail($req->post_id);
            $row->like()->where('id', $req->id)->delete();
            return 'deleted';
        } catch (Exception $e) {
            return 'back with error';
        }
    }
    public function deleteByComment(DeleteCommentRequest $req) {
        try {
            $row = Comment::findOrFail($req->comment_id);
            $row->like()->where('id', $req->id)->delete();
            return 'deleted';
        } catch (Exception $e) {
            return 'back with error';
        }
    }
}
