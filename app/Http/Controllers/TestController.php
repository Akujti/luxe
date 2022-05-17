<?php

namespace App\Http\Controllers;

use App\Mail\AddToEmailCalendar;
use App\Models\Appointment;
use App\Models\AppointmentTimeslot;
use App\Models\Video\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        // $videos = Video::get();
        // // dd($videos[0]->vimeo_details, $videos[1]->vimeo_details, $videos[2]->vimeo_details);
        // foreach ($videos as $video) {
        //     $video->update(
        //         [
        //             'description' => $video->vimeo_details['description'],
        //             'thumbnail' => $video->vimeo_details['thumbnail'],
        //             'embed_url' => $video->vimeo_details['embed_url']
        //         ]
        //     );
        // }
    }

    public function update_vimeo()
    {
        // $videos = Video::get();
        // // dd($videos[0]->vimeo_details, $videos[1]->vimeo_details, $videos[2]->vimeo_details);
        // foreach ($videos as $video) {
        //     $video->update(
        //         [
        //             'description' => $video->vimeo_details['description'],
        //             'thumbnail' => $video->vimeo_details['thumbnail'],
        //             'embed_url' => $video->vimeo_details['embed_url']
        //         ]
        //     );
        // }
    }

    public function submit(Request $request)
    {
        return response()->json($request->all());
    }
}
