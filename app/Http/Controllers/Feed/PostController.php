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
use Intervention\Image\ImageManagerStatic as Image;
class PostController extends Controller
{

    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {  
        $this->postRepository = $postRepository;
    }
    public function index(Request $req) {
        $nr = $req->input('nr', 8);
        $sort = $req->input('sort', 'desc');
        $posts = $this->postRepository->all($nr, $sort);

        if(request()->ajax()) {
            return response()->json($posts);
        }
       
        return view('news-feed.index', compact('posts'));
    }

    public function getById($id) {
        $row = $this->postRepository->getById($id);

        if(request()->ajax()) {
            return response()->json($row);
        }
        $data = $row['data'];
        return view('news-feed.single-page', compact('data'));
    }

    public function create(AddRequest $req) {
        try {
            $data = [
                'basicInfo' => array(
                    'title' => $req->title,
                    'body' => $req->body,
                    'agent_id' => auth()->id()
                ),
            ];

            if($req->hasFile('files')) {
                $files = $req->file('files');
                foreach($files as $file) {
                    $onlyName = time() . Str::random(10);
                    $name = $onlyName . '.' . $file->getClientOriginalExtension();
                    $type = $file->getClientOriginalExtension();
                  
                    if(substr($file->getMimeType(), 0, 5) == 'image') {
                        $name = $onlyName . '.png';
                        $type = 'png';
                        $imageInstance = Image::make($file);
                        $imageInstance->encode('png');
                        $imageInstance->fit(700, 600, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $imageInstance->save(storage_path('/app/public/feed/' . $name));
                    } else {
                        $file->storeAs('/feed', $name, 'public');
                    }

                    $data['files'][] = [
                        'path' => $name,
                        'type' => $type
                    ];
                }
            }

            if($req->has('tags')) {
                $data['tags'] = $req->tags;
            }
            
            $rowCreated = $this->postRepository->create($data);

            return back()->with('message', 'Successfully created');
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
            if($row->agent_id == auth()->id()) {
                $row->delete();
                return response()->json(true);
            }
            return response()->json(false);
        } catch (Exception $e) {
            return response()->json(false);
        }
    }
}
