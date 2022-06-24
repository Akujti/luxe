<?php

namespace App\Http\Controllers;

use App\Mail\AddToEmailCalendar;
use App\Models\Appointment;
use App\Models\AppointmentTimeslot;
use App\Models\MarketingCanva;
use App\Models\Video\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Vimeo\Laravel\Facades\Vimeo;

class TestController extends Controller
{
    public function index()
    {
        // $categories = MarketingCanva::with('featured_templates', 'categories', 'categories.featured_templates')->where('title', '!=', 'Presentation Booklet')->whereParentId(null)->get();
        // return ($categories);
        $videos = Video::get();
        // dd($videos[0]->vimeo_details, $videos[1]->vimeo_details, $videos[2]->vimeo_details);
        foreach ($videos as $video) {
            $response = Vimeo::request('/videos/' . $video->video_id, [], 'GET');
            $data = [];
            if ($response && $response['status'] != 404) {
                $data = [
                    'thumbnail' => $response['body']['pictures']['base_link'],
                ];
            } else {
                $data = [
                    'thumbnail' => '',
                ];
            }
            $video->update(
                [
                    'thumbnail' => $video->vimeo_details['thumbnail'],
                ]
            );
        }
        return $videos;
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
