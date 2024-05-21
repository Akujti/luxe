<?php

namespace App\Http\Controllers;

use App\Models\AgreementAgent;
use PDO;

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

    public function app_links()
    {
        $link = auth()->user()->app_link;
        return view('pages.app_link', compact('link'));
    }

    public function luxe_staff()
    {
        return view('luxe-staff.index');
    }

    public function luxe_managers()
    {
        return view('luxe-staff.luxe-managers');
    }

    public function loan_officers()
    {
        return view('luxe-staff.loan-officers');
    }

    public function real_estate_teams()
    {
        return view('luxe-staff.real-estate-teams');
    }

    public function mls_directory()
    {
        return view('pages.mls.mls-directory');
    }

    public function newconstructionsearch()
    {
        return view('pages.newconstructionsearch');
    }
}
