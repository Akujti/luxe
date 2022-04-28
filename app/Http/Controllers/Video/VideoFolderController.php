<?php

namespace App\Http\Controllers\Video;

use App\Models\Video\Video;
use Illuminate\Http\Request;
use App\Models\Video\VideoReview;
use App\Models\Video\VideoFolders;
use App\Http\Controllers\Controller;
use App\Http\Requests\Video\Video\AddReviewRequest;
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
        $reviews = $video->reviews()->orderBy('created_at', 'desc')->paginate(15);

        return view('pages.videos.single-video', compact('video', 'reviews'));
    }
    public function admin_index(Request $req) {
        $folder_id = $req->input('id', null);
        $folders = VideoFolders::with(['parent', 'children'])->where(function ($q) use ($folder_id) {
            if($folder_id) {
                $q->where('parent_id', $folder_id);
            } else {
                $q->whereNull('parent_id');
            }
        })->orderBy('title', 'asc')->get();
        $videos = Video::where(function ($q) use ($folder_id) {
            if($folder_id) {
                $q->where('folder_id', $folder_id);
            } else {
                $q->whereNull('folder_id');
            }
        })->latest()->get();
        
        $single_video = null;
        if($req->input('video_id')) {
            $single_video = Video::with('files')->findOrFail($req->video_id);
        }
        return view('admin.videos.index', compact('folders', 'videos', 'single_video'));
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

    public function create_review(AddReviewRequest $req) {
        $row = new VideoReview;
        $row->fill($req->only('comment', 'stars', 'video_id'));
        $row->user_id = auth()->id();
        $row->save();

        return back()->with('message', 'Successfully commented!');
    }
}
