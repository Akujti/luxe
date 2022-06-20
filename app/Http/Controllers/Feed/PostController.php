<?php

namespace App\Http\Controllers\Feed;

use File;
use Exception;
use ZipArchive;
use App\Models\Feed\Tag;
use App\Models\Feed\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Repositories\PostRepository;
use App\Http\Requests\Feed\Post\AddRequest;
use App\Http\Requests\Feed\Post\DeleteRequest;
use App\Http\Requests\Feed\Post\UpdateRequest;
use App\Http\Requests\Feed\Post\AddFileRequest;
use App\Http\Requests\Feed\Post\DownloadRequest;
use App\Http\Requests\Feed\Post\RemoveFileRequest;
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

    public function show($id) {
        $row = $this->postRepository->getById($id);

        if(request()->ajax()) {
            return response()->json($row);
        }
        $data = $row['data'];
        return view('news-feed.edit-page', compact('data'));
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
                    $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $type = $file->getClientOriginalExtension();
                    
                    if(in_array($type, explode(',', config('allowed-extension-file.media.images')))) {
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
            $data = [
                'basicInfo' => array(
                    'title' => $req->title,
                    'body' => $req->body,
                    'agent_id' => auth()->id()
                ),
            ];

            if($req->has('tags')) {
                $data['tags'] = $req->tags;
            }
            if($req->has('remove_tags')) {
                $data['remove_tags'] = $req->remove_tags;
            }

            $rowUpdated = $this->postRepository->update($row, $data);
            
            return back()->with('message', 'Successfully updated!');
        } catch (Exception $e) {
            return 'back with error';
        }
    }

    public function delete(DeleteRequest $req) {
        try {
            $row = Post::findOrFail($req->id);
            if($row->agent_id == auth()->id()) {
                $row->delete();
            }
            return redirect()->route('news.index')->with('message', 'Successfully deleted');
        } catch (Exception $e) {
            return redirect()->route('news.index')->with('message', 'Successfully deleted');
        }
    }
    public function download_files(DownloadRequest $req)
    {
        $row = Post::find($req->post_id);
        $zip = new ZipArchive;
        $fileName = 'allFiles.zip';

        $isExists = File::exists($fileName);

        if($isExists) {
            File::delete($fileName);
        }
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE){
            foreach($row->image as $image) {
                $file = storage_path('app/public/feed/'. $image->path);
                $zip->addFile($file, basename($file));
            }
            $zip->close();
        }
    	
        return response()->download(public_path($fileName));
    }
    public function removeFile(RemoveFileRequest $req)
    {
        $row = Post::with('image')->find($req->id);
        $image = $row->image()->where('id', $req->img_id)->first();
        if($image && $row->agent_id == auth()->id()) {
            $image->delete();
        }
        return response()->json(true);
    }

    public function createFile(AddFileRequest $req) {
        if($req->hasFile('file')) {
            $file = $req->file('file');
            $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $type = $file->getClientOriginalExtension();
            
            if(in_array($type, explode(',', config('allowed-extension-file.media.images')))) {
                $imageInstance = Image::make($file);
                $imageInstance->fit(700, 600, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $imageInstance->save(storage_path('/app/public/feed/' . $name));
            } else {
                $file->storeAs('/feed', $name, 'public');
            }
            $rowImage = [
                'path' => $name,
                'type' => $type
            ];

            $row = Post::find($req->id);
            $rowImageDB = $row->image()->createMany([
                $rowImage
            ]);
            $row->save();

            return response()->json(['post' =>$row, 'image' => $rowImageDB]);
        }
    }
}
