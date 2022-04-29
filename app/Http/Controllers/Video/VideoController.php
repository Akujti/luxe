<?php

namespace App\Http\Controllers\Video;

use App\Models\Video\Video;
use App\Http\Controllers\Controller;
use App\Http\Requests\Video\Video\AddRequest;
use App\Http\Requests\Video\Video\DeleteRequest;
use App\Http\Requests\Video\Video\UpdateRequest;

class VideoController extends Controller
{
    public function create(AddRequest $req) {
        $row = new Video;

        $row->fill($req->only('video_id', 'folder_id', 'presenter_name', 'date'));
        $row->save();

        return back()->with('message', 'Successfully Created');
    }

    public function update(UpdateRequest $req) {
        $row = Video::find($req->id);

        $row->fill($req->only('video_id', 'folder_id', 'presenter_name', 'date'));
        $row->save();

        return back()->with('message', 'Successfully Updated');
    }

    public function delete(DeleteRequest $req) {
        $row = Video::find($req->id);

        $row->delete();

        return back()->with('message', 'Successfully Deleted');
    }
}
