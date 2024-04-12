<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Room;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BookingController extends Controller
{

    public function selectRoom()
    {
        $rooms = Room::all();
        if (request()->wantsJson()) {
            return response()->json($rooms);
        }
        return view('pages.bookings.rooms', compact('rooms'));
    }

    public function index($room_id)
    {
        $room = Room::findOrFail($room_id);
        $bookings = $room->bookings;
        if (request()->wantsJson()) {
            return response()->json(['bookings' => $bookings]);
        }
        return view('pages.bookings.index', compact('bookings', 'room'));
    }

    public function store(Request $request)
    {
        $start = new \DateTime($request->start);
        $end = new \DateTime($request->end);
        $hour_diff = $start->diff($end)->format('%h') * 60;
        $minutes_diff = $start->diff($end)->format('%i');
        $time_diff = $hour_diff + $minutes_diff;
        if ($time_diff <= 60) {
            $validated = $request->validate([
                'title' => 'required',
                'room_id' => 'required|exists:rooms,id',
                'name' => 'required',
                'email' => 'required',
                'start' => 'required',
                'end' => 'required'
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
                    $mails = ['accounting@luxeknows.com', 'email@luxeknows.com', 'jorgef@luxeknows.com', 'ctginfo@ceperolaw.com', 'dcepero@ceperolaw.com'];
                    break;
                case 2:
                    $mails = ['denisse@luxeknows.com', 'email@luxeknows.com', 'steven@luxeknows.com'];
                    break;
                case 3:
                    $mails = ['bianca@luxeknows.com', 'designs@luxeknows.com', 'email@luxeknows.com'];
                    break;
                case 4:
                    $mails = ['onboarding@luxeknows.com', 'trainings@luxeknows.com', 'jennifer@luxeknows.com', 'email@luxeknows.com'];
                    break;
                case 5:
                    $mails = ['email@luxeknows.com', 'carolina@luxeknows.com', 'gabrielas@luxeknows.com', 'zillowflex@luxeknows.com'];
                    break;
                case 6:
                    $mails = ['email@luxeknows.com', 'dkp@luxeknows.com'];
                    break;
                case 7:
                    $mails = ['justink@luxeknows.com', 'email@luxeknows.com'];
                    break;
                case 8:
                    $mails = ['katherine@investinsouthfl.com', 'email@luxeknows.com'];
                    break;
                default:
                    $mails = ['support@luxeknows.com'];
            }
            try {
                $room = Room::find($request->room_id)->name;
                $details = [
                    'title' => $request->title,
                    'room' => $room,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'start' => $start->format('M d, Y H:i'),
                    'end' => $end->format('M d, Y H:i'),
                ];

                Mail::to($mails)->send(new BookingMail($details));
                if (request()->wantsJson()) {
                    return response()->json(['message' => 'Reseverd', "event" => $booking]);
                }
                return back()->with('message', 'Reserved');
            } catch (\Throwable $th) {
                if (request()->wantsJson()) {
                    return response()->json(['error' => 'Reserved, but error occurred while sending email'], 500);
                }
                return back()->with('error', 'Reserved, but error occurred while sending email');
            }
        } else {
            if (request()->wantsJson()) {
                return response()->json(['error' => 'Max time for slot is 60 minutes!'], 500);
            }
            return back()->with('error', 'Max time for slot is 60 minutes!');
        }
    }


    public function destroy(Request $request)
    {
        if (Auth::user()) {
            $booking = Booking::find($request->booking_id);
            $booking->delete();
            if (request()->wantsJson()) {
                return response()->json(['message' => 'Deleted Successfully!']);
            }
            return back()->with('message', 'Deleted Successfully');
        } else {
            if (request()->wantsJson()) {
                return response()->json(['error' => 'You do not have access!'], 403);
            }
            return back()->with('error', 'You do not have access');
        }
    }
}
