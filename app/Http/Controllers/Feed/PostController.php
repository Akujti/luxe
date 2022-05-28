<?php

namespace App\Http\Controllers\Feed;

use Exception;
use App\Models\Feed\Tag;
use App\Models\Feed\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\PostRepository;
use App\Http\Requests\Feed\Post\AddRequest;
use App\Http\Requests\Feed\Post\DeleteRequest;
use App\Http\Requests\Feed\Post\UpdateRequest;

class PostController extends Controller
{

    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {  
        $this->postRepository = $postRepository;
    }
    public function index() {
        $rows = $this->postRepository->all();
       
        return view('news-feed.index', compact('rows'));
    }

    public function create(AddRequest $req) {
        try {
            $row = new Post;
            $row->fill($req->only(['title', 'body']));
            $row->agent_id = 1; //auth()->id();
            $row->save();

            if($req->hasFile('files')) {
                $imageModels = [];
                $files = $req->file('files');
                foreach($files as $file) {
                    $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('/feed', $name, 'public');
                    $imageModels[] = ['path' => $name];
                }
                $row->image()->createMany($imageModels);
            }
            
            if($req->has('tags')) {
                foreach($req->tags as $tag) {
                    $id = Tag::where('name', $tag)->first();
                    if($id) {
                        $row->tag()->attach(['name' => $id->id]);
                    } else {
                        $row->tag()->create(['name' => $tag]);
                    }
                }
            }
            return Post::with(['image', 'tag'])->find($row->id);
        } catch (Exception $e) {
            return 'back with error';
        }
    }

    public function update(UpdateRequest $req) {
        try {
            $row = Post::findOrFail($req->id);
            $row->fill($req->only(['title', 'body']));
            $row->agent_id = 2; //auth()->id();
            $row->save();

            if($req->hasFile('files')) {
                $row->image()->delete();
                $imageModels = [];
                $files = $req->file('files');
                foreach($files as $file) {
                    $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('/feed', $name, 'public');
                    $imageModels[] = ['path' => $name];
                }
                $row->image()->createMany($imageModels);
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
            
            return Post::with(['image', 'tag'])->find($row->id);
        } catch (Exception $e) {
            return 'back with error';
        }
    }

    public function delete(DeleteRequest $req) {
        try {
            $row = Post::findOrFail($req->id);
            $row->delete();
            return 'deleted';
        } catch (Exception $e) {
            return 'back with error';
        }
    }
}
