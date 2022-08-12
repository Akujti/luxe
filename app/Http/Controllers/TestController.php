<?php

namespace App\Http\Controllers;

use App\Models\BrokersumoAgent;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function index()
    {

        // $events = Event::whereMonth('date', '>=', date('m'))->get();
        // $today = Carbon::today()->format('Y-m-d');
        // $upcoming_events = Event::whereDate('date', '>', now())->orderBy('date')->take(5)->get();
        // return $upcoming_events;
        return view('test');
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

        $path1 = $request->file('sheet')->store('temp');
        $path = storage_path('app') . '/' . $path1;
        $result = Excel::toArray(AgentImport::class, $path);
        $names = [];
        for ($i = 1; $i < count($result[0]) - 2; $i++) {
            array_push($names, $result[0][$i][0]);
        }

        $agents = BrokersumoAgent::get();
        $temp = [];
        foreach ($agents as $agent) {
            if (!in_array($agent->agent_name, $names)) {
                array_push($temp, $agent->agent_name);
            }
        }
        return response()->json([$names, $temp]);
    }
}
