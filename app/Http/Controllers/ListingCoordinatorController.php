<?php

namespace App\Http\Controllers;

use App\Models\ListingCoordinator;
use Illuminate\Http\Request;

class ListingCoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinators = ListingCoordinator::get();
        return view('listing-coordinators.index', compact('coordinators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListingCoordinator  $listingCoordinator
     * @return \Illuminate\Http\Response
     */
    public function show(ListingCoordinator $listingCoordinator)
    {
        return view('listing-coordinators.show', compact('listingCoordinator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListingCoordinator  $listingCoordinator
     * @return \Illuminate\Http\Response
     */
    public function edit(ListingCoordinator $listingCoordinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListingCoordinator  $listingCoordinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListingCoordinator $listingCoordinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListingCoordinator  $listingCoordinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingCoordinator $listingCoordinator)
    {
        //
    }

    public function change_status(Request $request)
    {
        $coordinator = ListingCoordinator::findOrFail($request->id);
        $coordinator->status = !$coordinator->status;
        $coordinator->update();
        return redirect()->back()->with('Status Changed');
    }
}
