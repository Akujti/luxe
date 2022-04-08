<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function forms()
    {
        return view('admin.forms');
    }
}
