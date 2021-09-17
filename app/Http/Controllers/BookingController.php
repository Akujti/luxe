<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BookingController extends Controller
{

    public function selectRoom()
    {
        $rooms = Room::all();
        return view('pages.bookings.rooms', compact('rooms'));
    }

    public function index($room_id)
    {
        $room = Room::findOrFail($room_id);
        $bookings = $room->bookings;
        return view('pages.bookings.index', compact('bookings', 'room'));
    }

    public function store(Request $request)
    {

//        if (!Auth::user()->isAdmin) {
//            return back()->with('error', 'You cannot create events');
//        }
        $validated = $request->validate([
            'title' => 'required',
            'room_id' => 'required|exists:rooms,id',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $booking = Booking::create([
            'title' => $request->title,
            'room_id' => $request->room_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start' => Carbon::parse($request->start),
            'end' => Carbon::parse($request->end),
        ]);

        $mails = [];

        switch ($request->room_id) {
            case 1:
                $mails = ['support@luxeknows.com', 'receptionist@luxeknows.com', 'wesley@luxeknows.com', 'marketing@luxeknows.com', 'dcepero@ceperolaw.com', 'ctginfo@ceperolaw.com'];
                break;
            case 2:
                $mails = ['denisse@luxeknows.com', 'irais@luxeknows.com', 'support@luxeknows.com', 'receptionist@luxeknows.com'];
                break;
            case 3:
                $mails = ['support@luxeknows.com', 'receptionist@luxeknows.com', 'wesley@luxeknows.com', 'bianca@luxeknows.com'];
                break;
            case 4:
                $mails = ['yesenia@luxeknows.com', 'support@luxeknows.com', 'receptionist@luxeknows.com'];
                break;
            case 5:
                $mails = ['support@luxeknows.com', 'receptionist@luxeknows.com'];
                break;
            default:
                $mails = [];
        }

        $room = Room::find($request->room_id)->name;
        $details = [
            'title' => $request->title,
            'room' => $room,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start' => Carbon::parse($request->start),
            'end' => Carbon::parse($request->end),
        ];

        Mail::to($mails)->send(new BookingMail($details));

        return back()->with('message', 'Reserved');
    }


    public function destroy(Request $request)
    {
        if (Auth::user()) {
            $booking = Booking::find($request->booking_id);
            $booking->delete();
            return back()->with('message', 'Deleted Successfully');
        } else {
            return back()->with('error', 'You dont have access');
        }

    }
}
