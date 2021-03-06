<?php

namespace App\Http\Controllers;

use App\Models\TemplateSubmit;
use Illuminate\Http\Request;

class TemplateSubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = TemplateSubmit::latest()->get();
        return view('pages.template-submits.index', compact('submissions'));
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
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateSubmit $templateSubmit)
    {
        $details = json_decode($templateSubmit->details);
        return view('pages.template-submits.show', compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateSubmit $templateSubmit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TemplateSubmit $templateSubmit)
    {
        $templateSubmit->status = 1;
        $templateSubmit->save();
        return back()->with('message', 'Submission Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateSubmit $templateSubmit)
    {
        //
    }
}
