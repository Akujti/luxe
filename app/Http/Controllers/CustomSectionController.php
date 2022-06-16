<?php

namespace App\Http\Controllers;

use App\Models\CustomSection;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomSectionRequest;
use App\Http\Requests\UpdateCustomSectionRequest;

class CustomSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCustomSectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomSectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomSection  $customSection
     * @return \Illuminate\Http\Response
     */
    public function show(CustomSection $customSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomSection  $customSection
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomSection $customSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomSectionRequest  $request
     * @param  \App\Models\CustomSection  $customSection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomSectionRequest $request, CustomSection $customSection)
    {
        $customSection->update(['text' => $request->text]);
        return redirect()->back()->with('message', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomSection  $customSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomSection $customSection)
    {
        //
    }
}
