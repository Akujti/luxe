<?php

namespace App\Http\Controllers;

use App\Mail\AddToEmailCalendar;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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

    public function attendance(Event $event)
    {
        $agents = $event->attendees()->withPivot('status', 'canceled')->get();
        return view('pages.events.attendance', compact('agents', 'event'));
    }

    public function cancel_attendance(Event $event, User $user)
    {
        $attendance = EventUser::where('event_id', $event->id)->where('user_id', $user->id)->first();
        if ($attendance) {
            $attendance->update(['canceled' => now()]);
        }
        return redirect()->back()->with('message', 'Agent Removed');
    }

    public function my_events()
    {
        $events = Auth::user()->attending_events()->orderBy('date')->paginate(30);
        if (request()->wantsJson()) {
            return response()->json($events);
        }
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
            if ($request->status) {
                $this->attend_email($event);
            }
            if ($request->wantsJson()) {
                return response()->json($event);
            }
            return back()->with('message', 'Success');
        } catch (\Throwable $th) {
            Log::alert($th);
            if ($request->wantsJson()) {
                return response()->json("Something went wrong!", 500);
            }
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function attend_email($event)
    {
        try {
            $from_name = 'LUXE Events';
            $from_address = 'email@luxeknows.com';
            $to_name = auth()->user()->profile->fullname;
            $description = $event->title . ' attendance';
            $to_address = auth()->user()->email;
            $startTime = $event->fullDate . 'T' . $event->start_time;
            $endTime = $event->fullDate . 'T' . $event->end_time;
            $subject = $event->title;
            $location = $event->location;

            //Create Email Headers
            $mime_boundary = "----LUXE Event----" . MD5(TIME());

            $headers = "MIME-Version: 1.0\n";
            $headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";
            $headers .= "Content-class: urn:content-classes:calendarmessage\n";

            //Create Email Body (HTML)
            $message = "--$mime_boundary\r\n";
            $message .= "Content-Type: text/html; charset=UTF-8\n";
            $message .= "Content-Transfer-Encoding: 8bit\n\n";
            $message .= "<html>\n";
            $message .= "<body>\n";
            $message .= '<p>Dear ' . $to_name . ',</p>';
            $message .= '<p>' . $description . '</p>';
            $message .= "</body>\n";
            $message .= "</html>\n";
            $message .= "--$mime_boundary\r\n";

            $ical = 'BEGIN:VCALENDAR' . "\r\n" .
                'PRODID:-//Microsoft Corporation//Outlook 10.0 MIMEDIR//EN' . "\r\n" .
                'VERSION:2.0' . "\r\n" .
                'METHOD:REQUEST' . "\r\n" .
                'BEGIN:VTIMEZONE' . "\r\n" .
                'TZID:Eastern Time' . "\r\n" .
                'BEGIN:STANDARD' . "\r\n" .
                'DTSTART:20091101T020000' . "\r\n" .
                'RRULE:FREQ=YEARLY;INTERVAL=1;BYDAY=1SU;BYMONTH=11' . "\r\n" .
                'TZOFFSETFROM:-0400' . "\r\n" .
                'TZOFFSETTO:-0500' . "\r\n" .
                'TZNAME:EST' . "\r\n" .
                'END:STANDARD' . "\r\n" .
                'BEGIN:DAYLIGHT' . "\r\n" .
                'DTSTART:20090301T020000' . "\r\n" .
                'RRULE:FREQ=YEARLY;INTERVAL=1;BYDAY=2SU;BYMONTH=3' . "\r\n" .
                'TZOFFSETFROM:-0500' . "\r\n" .
                'TZOFFSETTO:-0400' . "\r\n" .
                'TZNAME:EDST' . "\r\n" .
                'END:DAYLIGHT' . "\r\n" .
                'END:VTIMEZONE' . "\r\n" .
                'BEGIN:VEVENT' . "\r\n" .
                'ORGANIZER;CN="' . $from_name . '":MAILTO:' . $from_address . "\r\n" .
                'ATTENDEE;CN="' . $to_name . '";ROLE=REQ-PARTICIPANT;RSVP=TRUE:MAILTO:' . $to_address . "\r\n" .
                'LAST-MODIFIED:' . date("Ymd\TGis") . "\r\n" .
                'UID:' . date("Ymd\TGis", strtotime($startTime)) . rand() . "\r\n" .
                'DTSTAMP:' . date("Ymd\TGis") . "\r\n" .
                'DTSTART;TZID="Eastern Time":' . date("Ymd\THis", strtotime($startTime)) . "\r\n" .
                'DTEND;TZID="Eastern Time":' . date("Ymd\THis", strtotime($endTime)) . "\r\n" .
                'TRANSP:OPAQUE' . "\r\n" .
                'SEQUENCE:1' . "\r\n" .
                'SUMMARY:' . $subject . "\r\n" .
                'LOCATION:' . $location . "\r\n" .
                'CLASS:PUBLIC' . "\r\n" .
                'PRIORITY:5' . "\r\n" .
                'BEGIN:VALARM' . "\r\n" .
                'TRIGGER:-PT15M' . "\r\n" .
                'ACTION:DISPLAY' . "\r\n" .
                'DESCRIPTION:Reminder' . "\r\n" .
                'END:VALARM' . "\r\n" .
                'END:VEVENT' . "\r\n" .
                'END:VCALENDAR' . "\r\n";
            $message .= 'Content-Type: text/calendar;name="meeting.ics";method=REQUEST' . "\n";
            $message .= "Content-Transfer-Encoding: 8bit\n\n";
            $message .= $ical;

            $details['message'] = $message;
            $details['event'] = $event;

            Mail::to($to_address)->send(new AddToEmailCalendar($details));
        } catch (\Throwable $th) {
            Log::error('Send calendar email FAILED');
            Log::error(auth()->user());
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
            'status' => 'required|boolean',
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
        $event->private = $request->status;
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
            'type' => 'nullable',
            'status' => 'required|boolean'
        ], [
            'image.image' => 'The chosen file must be an image type',
            'rsvp.url' => 'RSVP must be a valid web link.',
            'zoom.url' => 'ZOOM must be a valid web link.',
        ]);
        $event = Event::find($request->event_id);
        $event->update(array_filter($validated));
        if (isset($request->image)) {
            $name = time() . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('images\events', $name, 'public');;
            $event->image = $path;
        }
        $event->private = $request->status;
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
