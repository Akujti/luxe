<?php

namespace App\Http\Controllers;

use App\Models\BrokersumoAgent;
use App\Models\User;
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
        $agents = User::get();
        $i = 0;
        for (; $i < count($agents); $i++) {
            $agents[$i]->update(['app_link' => $result[0][$i][0]]);
        }
        return response()->json([$i, count($agents), $names]);
    }
}
