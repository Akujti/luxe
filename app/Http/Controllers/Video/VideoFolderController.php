<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\Video\AddReviewCommentRequest;
use App\Http\Requests\Video\Video\AddReviewRequest;
use App\Http\Requests\Video\VideoFolder\AddRequest;
use App\Http\Requests\Video\VideoFolder\DeleteRequest;
use App\Http\Requests\Video\VideoFolder\UpdateRequest;
use App\Models\Video\Video;
use App\Models\Video\VideoComment;
use App\Models\Video\VideoFolders;
use App\Models\Video\VideoReview;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class VideoFolderController extends Controller
{
    public function index(Request $req)
    {
        $folder_id = $req->input('id', null);
        $videoFolders = VideoFolders::with('videos')->where(function ($q) use ($folder_id) {
            if ($folder_id) {
                $q->where('parent_id', $folder_id);
            } else {
                $q->whereNull('parent_id');
            }
        })->orderBy('title')->get();
        $videos = Video::where(function ($q) use ($folder_id) {
            if ($folder_id) {
                $q->where('folder_id', $folder_id);
            } else {
                $q->whereNull('folder_id');
            }
        })->latest()->paginate(6);

        if (request()->wantsJson()) {
            return response()->json(['videoFolders' => $videoFolders, 'videos' => $videos]);
        }
        return view('pages.videos', compact('videoFolders', 'videos'));
    }

    public function favoriteVideos(Request $req)
    {
        $videos = $req->user()->favoriteVideos()->latest()->paginate(6);

        if ($req->wantsJson()) {
            return response()->json(['videos' => $videos]);
        }
        return view('pages.favorite-videos', compact('videos'));
    }

    public function show(Request $request, $video_id)
    {
        $video = Video::with('list_views')->findOrFail($video_id);

        $reviews = $video->reviews()->orderBy('created_at', 'desc')->get()->take(10);
        $video->reviewsAvg = $video->reviews->avg('stars');
        $comments = $video->comments()->orderBy('created_at', 'desc')->get()->take(10);
        if (request()->wantsJson()) {
            return response()->json(['video' => $video, 'reviews' => $reviews, 'comments' => $comments]);
        }

        $video->is_favorite = $request->user()->favoriteVideos()->where('favorite_videos.video_id', $video_id)->exists();


        return view('pages.videos.single-video', compact('video', 'reviews', 'comments'));
    }

    public function admin_index(Request $req)
    {
        $folder_id = $req->input('id', null);
        $folders = VideoFolders::with(['parent', 'children'])->where(function ($q) use ($folder_id) {
            if ($folder_id) {
                $q->where('parent_id', $folder_id);
            } else {
                $q->whereNull('parent_id');
            }
        })->orderBy('title', 'asc')->get();
        $videos = Video::where(function ($q) use ($folder_id) {
            if ($folder_id) {
                $q->where('folder_id', $folder_id);
            } else {
                $q->whereNull('folder_id');
            }
        })->latest()->get();

        $single_video = null;
        if ($req->input('video_id')) {
            $single_video = Video::with('files')->findOrFail($req->video_id);
        }
        return view('admin.videos.index', compact('folders', 'videos', 'single_video'));
    }

    public function create(AddRequest $req)
    {
        $row = new VideoFolders;

        $row->fill($req->only('title', 'parent_id'));
        $row->save();

        return back()->with('message', 'Successfully Created');
    }

    public function update(UpdateRequest $req)
    {
        $row = VideoFolders::find($req->id);
        if ($req->hasFile('image')) {
            $file = $req->image;
            $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $img = Image::make($file);

            $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('/new-storage/images/marketing/' . $name));
            $val = 'new-storage/images/marketing/' . $name;
            $row->image = $val;
        }
        $row->fill($req->only('title', 'parent_id'));
        $row->save();

        return back()->with('message', 'Successfully Updated');
    }

    public function delete(DeleteRequest $req)
    {
        $row = VideoFolders::find($req->id);
        $row->delete();

        return back()->with('message', 'Successfully Deleted');
    }

    public function create_review(AddReviewRequest $req)
    {
        $row = new VideoReview;
        $row->fill($req->only('comment', 'stars', 'video_id'));
        $row->user_id = auth()->id();
        $row->save();

        $row->load('user');

        if (request()->wantsJson()) {
            return response()->json(['review' => $row]);
        }

        return back()->with('message', 'Successfully added!');
    }

    public function create_comment(AddReviewCommentRequest $req)
    {
        $row = new VideoComment;
        $row->fill($req->only('comment', 'video_id'));
        $row->user_id = auth()->id();
        $row->save();
        $row->load('user');

        if (request()->wantsJson()) {
            return response()->json(['comment' => $row]);
        }
        return back()->with('message', 'Successfully added!');
    }

    public function toggleFavorite(Request $request, Video $video)
    {
        $user = $request->user();

        $user->favoriteVideos()->toggle($video);

        return redirect()->back();
    }
}
