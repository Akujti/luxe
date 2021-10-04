<?php

namespace App\Http\Controllers;

use App\Models\WrittenEmailTemplateItem;
use Illuminate\Http\Request;

class WrittenEmailTemplateItemController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $writtenEmailTemplate)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        WrittenEmailTemplateItem::create([
            'title' => $request->title,
            'content' => $request->content,
            'folder_id' => $writtenEmailTemplate
        ]);

        return back()->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\WrittenEmailTemplateItem $writtenEmailTemplateItem
     * @return \Illuminate\Http\Response
     */
    public function show(WrittenEmailTemplateItem $writtenEmailTemplateItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\WrittenEmailTemplateItem $writtenEmailTemplateItem
     * @return \Illuminate\Http\Response
     */
    public function edit(WrittenEmailTemplateItem $writtenEmailTemplateItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WrittenEmailTemplateItem $writtenEmailTemplateItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $item = WrittenEmailTemplateItem::findOrFail($request->id);
        $item->update([
            'title' => $request->title,
            'content' => $request->content
        ]);


        return back()->with('message', 'Updated Successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\WrittenEmailTemplateItem $writtenEmailTemplateItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        WrittenEmailTemplateItem::findOrFail($request->id)->delete();
        return back()->with('message', 'Deleted Successfully');
    }
}
