<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use PDF;

class TestController extends Controller
{
    public function index()
    {
        if (App::environment('local')) {
            $a = Auth::loginUsingId(149);
            return redirect()->route('home');
        }
    }

    public function update_vimeo()
    {
    }

    public function submit(Request $request)
    {
    }
}
