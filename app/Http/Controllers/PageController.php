<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function calendar()
    {
        return view('pages.calendar');
    }
}
