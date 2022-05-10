<?php

namespace App\Http\Controllers\Video;

use Illuminate\Support\Str;
use App\Models\Video\VideoFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\Video\VideoFile\AddRequest;
use App\Http\Requests\Video\VideoFile\DeleteRequest;
use App\Http\Requests\Video\VideoFile\UpdateRequest;

class VideoFileController extends Controller
{
    public function create(AddRequest $req) {
        $row = new VideoFile;
        if (isset($req->file)) {
            $name = time() . Str::random(10) . '.' . $req->file->getClientOriginalExtension();
            $path = $req->file->storeAs('/video_files', $name, 'public');
            $row->file = $path;
        }
        $row->fill($req->only('title', 'video_id'));
        $row->save();

        return back()->with('message', 'Successfully Created');
    }

    public function update(UpdateRequest $req) {
        $row = VideoFile::find($req->id);
        if (isset($req->file)) {
            $name = time() . Str::random(10) . '.' . $req->file->getClientOriginalExtension();
            $path = $req->file->storeAs('/video_files', $name, 'public');
            $row->file = $path;
        }
        $row->fill($req->only('title'));
        $row->save();

        return back()->with('message', 'Successfully Updated');
    }

    public function delete(DeleteRequest $req) {
        $row = VideoFile::find($req->id);

        $row->delete();

        return back()->with('message', 'Successfully Deleted');
    }
}
