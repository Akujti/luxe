<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
        $events = Event::whereMonth('date', '>=', date('m'))->get();
        if (request()->wantsJson()) {
            return response()->json(['events' => $events]);
        }
        $isAdmin = Auth::user()->isAdmin;
        return view('pages.events.events', compact('events', 'isAdmin'));
    }

    public function my_events()
    {
        $events = Auth::user()->events;
        return view('pages.events.my-events', compact('events'));
    }
    public function attend(Request $request)
    {
        try {
            $event = Event::findOrFail($request->event_id);
            EventUser::updateOrCreate(
                [
                    'event_id' => $event->id,
                    'user_id' => auth()->user()->id,
                ],
                [
                    'status' => $request->status,
                ]
            );
            return back()->with('message', 'Success');
        } catch (\Throwable $th) {
            Log::alert($th);
            return back()->with('error', 'Something went wrong!');
        }
    }

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
            'start_time' => 'nullable',
            'end_time' => 'nullable',
            'type' => 'nullable',
            'rsvp' => 'nullable|url',
            'zoom' => 'nullable|url',
        ], [
            'image.image' => 'The chosen file must be an image type',
            'rsvp.url' => 'RSVP must be a valid web link.',
            'zoom.url' => 'ZOOM must be a valid web link.',
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

    public function update(Request $request)
    {
        if (!Auth::user()->isAdmin) {
            return back()->with('error', 'You cannot update event');
        }
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'start_time' => 'required',
            'end_time' => 'required',
            'rsvp' => 'nullable|url',
            'zoom' => 'nullable|url',
        ], [
            'image.image' => 'The chosen file must be an image type',
            'rsvp.url' => 'RSVP must be a valid web link.',
            'zoom.url' => 'ZOOM must be a valid web link.',
        ]);
        $event = Event::find($request->event_id);
        $event->update($validated);
        if (isset($request->image)) {
            $name = time() . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('images\events', $name, 'public');;
            $event->image = $path;
        }
        $event->user_id = Auth::id();
        $event->save();
        return back()->with('message', 'Event has been updated.');
    }

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
