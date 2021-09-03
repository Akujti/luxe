<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

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
}
