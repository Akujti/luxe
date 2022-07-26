<?php

namespace App\Http\Controllers;

use App\Models\AgreementAgent;

class PageController extends Controller
{

    public function links()
    {
        return view('pages.links');
    }

    public function videos()
    {
        return view('pages.videos');
    }

    public function video_folder($folder)
    {
        return view('pages.videos.' . $folder);
    }


    public function agreement_agents()
    {
        return redirect('/home?dir=coming_soon');
        $agents = AgreementAgent::get();
        if (request()->wantsJson()) {
            return response()->json(['agents' => $agents]);
        }
        return view('agreements.index', compact('agents'));
    }

    public function agreement_agent(AgreementAgent $agent)
    {
        return view('agreements.' . $agent->agreement_page, compact('agent'));
    }
}
