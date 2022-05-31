<?php

namespace App\Http\Controllers\Feed;

use Exception;
use App\Models\Feed\Post;
use App\Models\Feed\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Feed\Like\AddRequest;
use App\Http\Requests\Feed\Like\AddCommentRequest;

class LikeController extends Controller
{
    public function create(AddRequest $req) {
        try {
            $row = Post::findOrFail($req->post_id);

            if($row->like()->where('user_id', auth()->id())->count()) {
                $row->like()->delete();
                return response()->json(false);
            } else {
                $row->like()->create([
                    'user_id' => auth()->id()
                ]);
            }
            
            return response()->json(true);
        } catch (Exception $e) {
            return 'back with error';
        }
    }
    public function createByComment(AddCommentRequest $req) {
        try {
            $row = Comment::findOrFail($req->comment_id);

            if($row->like()->where('user_id', auth()->id())->count()) {
                $row->like()->delete();
                return response()->json(false);
            } else {
                $row->like()->create([
                    'user_id' => auth()->id()
                ]);
            }
            
            return response()->json(true);
        } catch (Exception $e) {
            return 'back with error';
        }
    }
}
