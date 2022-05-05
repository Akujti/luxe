<?php

namespace App\Http\Controllers;

class ThemeController extends Controller
{
    public function __invoke($page)
    {
        if(!view()->exists('themes.'.$page)) {
            abort(404);
        }
        return view('themes.'. $page);
    }
}
