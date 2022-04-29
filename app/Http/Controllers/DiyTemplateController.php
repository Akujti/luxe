<?php

namespace App\Http\Controllers;

use App\Models\DiyTemplate;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiyTemplateRequest;
use App\Http\Requests\UpdateDiyTemplateRequest;
use App\Models\DiyTemplateCategory;

class DiyTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DiyTemplateCategory::orderBy('order')->get();
        return view('pages.diy.index', compact('categories'));
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
     * @param  \App\Http\Requests\StoreDiyTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiyTemplateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiyTemplate  $diyTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(DiyTemplate $diyTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiyTemplate  $diyTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(DiyTemplate $diyTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiyTemplateRequest  $request
     * @param  \App\Models\DiyTemplate  $diyTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiyTemplateRequest $request, DiyTemplate $diyTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiyTemplate  $diyTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiyTemplate $diyTemplate)
    {
        //
    }
}
