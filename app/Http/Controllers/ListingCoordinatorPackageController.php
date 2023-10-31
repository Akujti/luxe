<?php

namespace App\Http\Controllers;

use App\Models\ListingCoordinatorPackage;
use Illuminate\Http\Request;

class ListingCoordinatorPackageController extends Controller
{
    public function index()
    {
        return view('listing-coordinator-packages.index');
    }

    public function show($type)
    {
        $type = ListingCoordinatorPackage::where('package', $type)->firstOrFail();
        $type->load('coordinator');
        return view('listing-coordinator-packages.' . $type->package, compact('type'));
    }
}
