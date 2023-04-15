<?php

namespace App\Http\Controllers\CMA;

use App\Http\Controllers\Controller;

class CMAController extends Controller
{
    public function index()
    {
        return view('cma.index');
    }

    public function search()
    {
        return view('cma.search');
    }

    public function show()
    {
        return view('cma.show');
    }

    public function create()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
