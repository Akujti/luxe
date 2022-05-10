<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
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
        $template = new DiyTemplate();
        $template->title = $request->title;
        $template->url = $request->url;
        if ($request->image) {
            $name = time() . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('/marketing/canva', $name, 'public');
            $template->image = $path;
        } else if ($request->image_url) {
            $template->image = $request->image_url;
        }
        $template->category_id = $request->category_id;
        $template->order = $request->order ?? ++DiyTemplate::where('category_id', $request->category_id)->latest()->first()->order;
        $template->save();
        return back()->with('message', 'Created successfully');
    }

    public function update(UpdateDiyTemplateRequest $request)
    {
        $template = DiyTemplate::findOrFail($request->id);
        $template->title = $request->title;
        $template->url = $request->url;
        if ($request->image) {
            $name = time() . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('/marketing/canva', $name, 'public');
            $template->image = $path;
        } else if ($request->image_url) {
            $template->image = $request->image_url;
        }
        $template->order = $request->order ?? ++DiyTemplate::where('category_id', $request->category_id)->latest()->first()->order;
        $template->save();
        return back()->with('message', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiyTemplate  $diyTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdateDiyTemplateRequest $request)
    {
        DiyTemplate::findOrFail($request->id)->delete();
        return back()->with('message', 'Deleted Successfully');
    }
}
