<?php

namespace App\Http\Controllers;

use App\Models\EventGallery;
use Illuminate\Http\Request;

class EventGalleryController extends Controller
{
    public function index()
    {
        $event_galleries = EventGallery::orderBy('title')->get();
        return view('admin.event-galleries.index', compact('event_galleries'));
    }

    public function show(EventGallery $event_gallery)
    {
        $event_gallery = $event_gallery->load('images');
        return view('admin.event-galleries.images.index', compact('event_gallery'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);
        EventGallery::create([
            'title' => $request->title,
            'link' => $request->link,
        ]);
        return back()->with('message', 'Gallery Created');
    }

    public function update(Request $request)
    {
        $request->validate([
            'gallery_id' => 'required|exists:event_galleries,id',
            'title' => 'required',
            'link' => 'required',
        ]);
        $gallery = EventGallery::find($request->gallery_id);
        $gallery->update([
            'title' => $request->title,
            'link' => $request->link,
        ]);
        return back()->with('message', 'Gallery Updated');
    }

    public function destroy(EventGallery $event_gallery)
    {
        $event_gallery->delete();
        return back()->with('message', 'Gallery Deleted');
    }
}
