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
        $forms = Form::where('title', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'forms');
        $folders = Folder::where('id', '!=', $folder_id)->where('title', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'folders');
        $files = File::where('folder_id', '!=', $folder_id)->where('title', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'files');
        $guides = File::where('folder_id', $folder_id)->where('title', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'guides');
        $videos = Video::where('title', 'like', '%' . $req->search . '%')->paginate(4, ['*'], 'videos');
        $products = LuxeStoreProduct::where('name', 'like', '%' . $req->search . '%')->paginate(8, ['*'], 'products');

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
        $rows = Video::all();

        foreach ($rows as $row) {
            $row->title = $row->vimeo_details['name'];
            $row->save();
        }
        return back();
    }
}
