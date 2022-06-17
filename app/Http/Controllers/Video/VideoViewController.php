<?php

namespace App\Http\Controllers\Video;

use App\Models\Video\Video;
use App\Http\Controllers\Controller;
use App\Http\Requests\Video\VideoView\AddRequest;

class VideoViewController extends Controller
{
    public function create(AddRequest $req)
    {
        try {
            $row = Video::find($req->video_id);
    
            $row->list_views()->createMany([
                [ 'user_id' => auth()->id() ]            
            ]);

            $row->increment('views', 1);
            $row->save();
            return response()->json(true);
        } catch (\Throwable $th) {
            return response()->json(false);
        }
    }
}
