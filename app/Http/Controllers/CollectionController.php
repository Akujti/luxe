<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        return view('collections.index');
    }

    public function show()
    {
        return view('collections.show');
    }
}
