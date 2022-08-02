<?php

namespace App\Http\Controllers;

use App\Mail\AddToEmailCalendar;
use App\Models\Appointment;
use App\Models\AppointmentTimeslot;
use App\Models\BrokersumoAgent;
use App\Models\Event;
use App\Models\MarketingCanva;
use App\Models\ReferralPartnerCategory;
use App\Models\Video\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Vimeo\Laravel\Facades\Vimeo;

class TestController extends Controller
{
    public function index()
    {
        $events = Event::whereMonth('date', '>=', date('m'))->get();
        $today = Carbon::today()->format('Y-m-d');
        $upcoming_events = Event::whereDate('date', '>', now())->orderBy('date')->take(5)->get();
        return $upcoming_events;
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
