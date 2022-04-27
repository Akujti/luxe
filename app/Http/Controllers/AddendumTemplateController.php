<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WrittenEmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddendumTemplateController extends Controller
{
    public function index()
    {
        $templates = WrittenEmailTemplate::whereType('addendum')->get();
        return view('pages.addendum-templates.index', compact('templates'));
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

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|max:255']);
        WrittenEmailTemplate::create(['title' => $request->title, 'type' => 'addendum']);
        return redirect()->back();
    }

    public function show(Request $request, WrittenEmailTemplate $writtenEmailTemplate)
    {
        $isAdmin = Auth::user()->isAdmin;
        $items = $writtenEmailTemplate ? $writtenEmailTemplate->items : [];
        return view('pages.addendum-templates.show', compact('items', 'writtenEmailTemplate', 'isAdmin'));
    }
}
