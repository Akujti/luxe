<?php

namespace App\Http\Controllers\Video;

use Exception;
use App\Models\Video\Video;
use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Video\Video\AddRequest;
use App\Http\Requests\Video\Video\DeleteRequest;
use App\Http\Requests\Video\Video\UpdateRequest;
use App\Models\File;
use App\Models\Folder;
use App\Models\Form;
use App\Models\LuxeStore\LuxeStoreProduct;
use Carbon\Carbon;

class VideoController extends Controller
{
    public function search(Request $req)
    {
        $folder_id = Folder::where('title', 'XNvgkxNbjU')->first()->id;
        $forms = Form::where('title', 'like', '%' . $req->search . '%')->where('title', 'not like', '%business%')->paginate(8, ['*'], 'forms');
        $folders = Folder::where('id', '!=', $folder_id)->where('title', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'folders');
        $files = File::where('folder_id', '!=', $folder_id)->where('title', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'files');
        $guides = File::where('folder_id', $folder_id)->where('title', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'guides');
        $videos = Video::where('title', 'like', '%' . $req->search . '%')->latest()->paginate(4, ['*'], 'videos');
        $products = LuxeStoreProduct::where('name', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'products');

        if ($req->wantsJson()) {
            return response()->json(['forms' => $forms, 'videos' => $videos, 'files' => $files, 'folders' => $folders, 'products' => $products, 'guides' => $guides]);
        }

        return view('search.index', compact('forms', 'videos', 'files', 'folders', 'products', 'guides'));
    }

    public function create(AddRequest $req)
    {
        try {
            $row = new Video;
            $row->fill($req->only('video_id', 'folder_id', 'presenter_name', 'date'));

            $response = Vimeo::request('/videos/' . $req->video_id, [], 'GET');

            if ($response && $response['status'] != 404) {
                $row->title = $response['body']['name'];
                $row->description = $response['body']['description'];
                $row->thumbnail = $response['body']['pictures']['base_link'];
                $row->embed_url = $response['body']['player_embed_url'];
                $row->views = $response['body']['stats']['plays'];
                $row->created_at = Carbon::parse($response['body']['created_time'])->diffForHumans();
            } else {
                return back()->with('error', 'Something went wrong!');
            }
            $row->save();
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
        return back()->with('message', 'Successfully Created');
    }

    public function update(UpdateRequest $req)
    {
        try {
            $row = Video::find($req->id);
            $row->fill($req->only('video_id', 'folder_id', 'presenter_name', 'date'));

            $response = Vimeo::request('/videos/' . $req->video_id, [], 'GET');

            if ($response && $response['status'] != 404) {
                $row->title = $response['body']['name'];
                $row->description = $response['body']['description'];
                $row->thumbnail = $response['body']['pictures']['base_link'];
                $row->embed_url = $response['body']['player_embed_url'];
                $row->views = $response['body']['stats']['plays'];
                $row->created_at = Carbon::parse($response['body']['created_time'])->diffForHumans();
            } else {
                return back()->with('error', 'Something went wrong!');
            }
            $row->save();
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }

        return back()->with('message', 'Successfully Updated');
    }

    public function delete(DeleteRequest $req)
    {
        $row = Video::find($req->id);

        $row->delete();

        return back()->with('message', 'Successfully Deleted');
    }

    public function update_videos()
    {
        $rows = Video::where('views', 0)->get();

        foreach ($rows as $row) {

            $response = Vimeo::request('/videos/' . $row->video_id, [], 'GET');
            if (isset($response, $response['body']['stats'])) {
                $row->views = $response['body']['stats']['plays'];
                $row->save();
            }
        }
        return back();
    }

    public function update_videos_thumbnails()
    {
        $videos = Video::get();
        foreach ($videos as $video) {
            $response = Vimeo::request('/videos/' . $video->video_id, [], 'GET');
            $data = ['thumbnail' => $video->vimeo_details['thumbnail']];
            if ($response && $response['status'] != 404) {
                $data = [
                    'thumbnail' => $response['body']['pictures']['base_link'],
                ];
            }
            $video->update(
                [
                    'thumbnail' => $data['thumbnail'],
                ]
            );
        }
        return back();
    }
}
