<?php

namespace App\Http\Controllers\Video;

use App\Models\Video\Video;
use Illuminate\Http\Request;
use App\Models\Video\VideoFolders;
use App\Http\Controllers\Controller;
use App\Http\Requests\Video\VideoFolder\AddRequest;
use App\Http\Requests\Video\VideoFolder\DeleteRequest;
use App\Http\Requests\Video\VideoFolder\UpdateRequest;

class VideoFolderController extends Controller
{
    public function index(Request $req) {
        $folder_id = $req->input('id', null);
        $videoFolders = VideoFolders::with('videos')->where(function ($q) use ($folder_id) {
            if($folder_id) {
                $q->where('parent_id', $folder_id);
            } else {
                $q->whereNull('parent_id');
            }
        })->latest()->get();
        $videos = Video::where(function ($q) use ($folder_id) {
            if($folder_id) {
                $q->where('folder_id', $folder_id);
            } else {
                $q->whereNull('folder_id');
            }
        })->latest()->get();
        return view('pages.videos', compact('videoFolders', 'videos'));
    }

    public function show($video_id) {
        $video = Video::findOrFail($video_id);

        return view('pages.videos.single-video', compact('video'));
    }
    public function admin_index() {
        $videos = VideoFolders::with(['parent', 'children'])->latest()->paginate(15);
        return view('admin.videos.index', compact('videos'));
    }

    public function create(AddRequest $req) {
        $row = new VideoFolders;

        $row->fill($req->only('title', 'parent_id'));
        $row->save();

        return back()->with('message', 'Successfully Created');
    }

    public function update(UpdateRequest $req) {
        $row = VideoFolders::find($req->id);

        $row->fill($req->only('title', 'parent_id'));
        $row->save();

        return back()->with('message', 'Successfully Updated');
    }

    public function delete(DeleteRequest $req) {
        $row = VideoFolders::find($req->id);

        $row->delete();

        return back()->with('message', 'Successfully Deleted');
    }
}
