<?php

namespace App\Http\Controllers;

use App\Models\WrittenEmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WrittenEmailTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = WrittenEmailTemplate::whereType(null)->get();
        return view('pages.written-email-templates.index', compact('templates'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|max:255']);
        WrittenEmailTemplate::create(['title' => $request->title]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\WrittenEmailTemplate $writtenEmailTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(WrittenEmailTemplate $writtenEmailTemplate)
    {
        $isAdmin = Auth::user()->isAdmin;
        $items = $writtenEmailTemplate->items;
        return view('pages.written-email-templates.show', compact('items', 'writtenEmailTemplate', 'isAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\WrittenEmailTemplate $writtenEmailTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(WrittenEmailTemplate $writtenEmailTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WrittenEmailTemplate $writtenEmailTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WrittenEmailTemplate $writtenEmailTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\WrittenEmailTemplate $writtenEmailTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(WrittenEmailTemplate $writtenEmailTemplate)
    {
        //
    }
}
