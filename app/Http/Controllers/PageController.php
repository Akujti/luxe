<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function links()
    {
        return view('pages.links');
    }
}
