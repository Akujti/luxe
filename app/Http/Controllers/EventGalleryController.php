<?php

namespace App\Http\Controllers;

use App\Models\EventGallery;
use Illuminate\Http\Request;

class EventGalleryController extends Controller
{
    public function index()
    {
        $event_galleries = EventGallery::orderBy('date', 'desc')->get();
        return view('admin.event-galleries.index', compact('event_galleries'));
    }

    public function user_index()
    {
        $galleries = EventGallery::orderBy('date', 'desc')->get();
        return view('pages.events.galleries.index', compact('galleries'));
    }

    public function show(EventGallery $event_gallery)
    {
        $event_gallery = $event_gallery->load('images');
        return view('admin.event-galleries.images.index', compact('event_gallery'));
    }

    public function user_show(EventGallery $gallery)
    {
        $gallery->load('images');
        $images = $gallery->images()->paginate(9);
        return view('pages.events.galleries.show', compact('gallery', 'images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'date' => 'nullable|date',
        ]);
        EventGallery::create([
            'title' => $request->title,
            'link' => $request->link,
            'date' => $request->date,
        ]);
        return back()->with('message', 'Gallery Created');
    }

    public function update(Request $request)
    {
        $request->validate([
            'gallery_id' => 'required|exists:event_galleries,id',
            'title' => 'required',
            'link' => 'required',
            'date' => 'nullable|date',
        ]);
        $gallery = EventGallery::find($request->gallery_id);
        $gallery->update([
            'title' => $request->title,
            'link' => $request->link,
            'date' => $request->date,
        ]);
        return back()->with('message', 'Gallery Updated');
    }

    public function destroy(EventGallery $event_gallery)
    {
        $event_gallery->delete();
        return back()->with('message', 'Gallery Deleted');
    }
}
