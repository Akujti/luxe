<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        return view('pages.events.events', compact('events'));
    }

    public function my_events()
    {
        $events = Auth::user()->events;
        return view('pages.events.my-events', compact('events'));
    }

    /**
     * Show the form for creating a open-house resource.
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
        if (!Auth::user()->isAdmin) {
            return back()->with('error', 'You cannot create events');
        }
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'start_time' => 'required',
            'end_time' => 'required',
            'rsvp' => 'required',
        ], [
            'image.image' => 'The chosen file must be an image type'
        ]);
        $event = Event::create($validated);
        if (isset($request->image)) {
            $name = time() . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('images\events', $name, 'public');;
            $event->image = $path;
        }
        $event->user_id = Auth::id();
        $event->save();
        return redirect()->route('events.index')->with('message', 'Event has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $event = Event::find($request->event_id);
        if (Auth::id() == $event->user_id) {
            $event->delete();
            return redirect()->route('events.index')->with('message', 'Deleted Successfully');
        }
        return redirect()->route('events.index')->with('warning', 'You don\'t have access');
    }
}
