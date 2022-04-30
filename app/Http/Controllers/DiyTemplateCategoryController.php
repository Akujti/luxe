<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\DiyTemplateCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiyTemplateCategoryRequest;
use App\Http\Requests\UpdateDiyTemplateCategoryRequest;
use App\Models\DiyTemplate;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;

class DiyTemplateCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agent_index()
    {
        $categories = DiyTemplateCategory::whereNull('parent_id')->orderBy('order')->get();
        return view('pages.diy.index', compact('categories'));
    }

    public function agent_show(DiyTemplateCategory $diyTemplateCategory)
    {
        $category = $diyTemplateCategory->load('categories', 'templates');
        return view('pages.diy.show', compact('category'));
    }

    public function index()
    {
        $categories = DiyTemplateCategory::whereNull('parent_id')->with('categories', 'templates')->orderBy('order')->get();
        $templates = DiyTemplate::whereNull('category_id')->orderBy('order')->get();
        $last_order = DiyTemplateCategory::latest()->first()->order ?? 0;
        ++$last_order;
        return view('admin.marketing.diy.index', compact('categories', 'templates', 'last_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiyTemplateCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiyTemplateCategoryRequest $req)
    {

        $category = new DiyTemplateCategory();

        $category->title = $req->title;

        $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
        $path = $req->image->storeAs('/marketing/canva', $name, 'public');;
        $category->image = $path;
        $category->parent_id = $req->parent_id;
        $category->order = $req->order ?? ++DiyTemplateCategory::where('category_id', $req->category_id)->latest()->first()->order;
        $category->save();

        return back()->with('message', 'Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiyTemplateCategory  $diyTemplateCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = DiyTemplateCategory::findOrFail($id)->load('categories');
        $last_order = DiyTemplateCategory::where('parent_id', $category->id)->latest()->first()->order ?? 0;
        $templates = $category->templates;
        ++$last_order;
        $last_order_template = DiyTemplate::where('category_id', $category->id)->latest()->first()->order ?? 0;
        ++$last_order_template;
        return view('admin.marketing.diy.show', compact('category', 'templates', 'last_order', 'last_order_template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiyTemplateCategory  $diyTemplateCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(DiyTemplateCategory $diyTemplateCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiyTemplateCategoryRequest  $request
     * @param  \App\Models\DiyTemplateCategory  $diyTemplateCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiyTemplateCategoryRequest $request, DiyTemplateCategory $diyTemplateCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiyTemplateCategory  $diyTemplateCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdateDiyTemplateCategoryRequest $request)
    {
        DiyTemplateCategory::findOrFail($request->id)->delete();
        return back()->with('message', 'Deleted successfully');
    }
}
