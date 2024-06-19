<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMailTemplate;
use App\Models\Appointment;
use App\Models\AppointmentAddress;
use App\Models\AppointmentTimeslot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        // return response()->json([Appointment::where('date', $request->date)->get(), $request->all()]);
    }

    public function getAddresses()
    {
        return response()->json(AppointmentAddress::get());
    }

    public function create()
    {
        $addresses = AppointmentAddress::with('user')->get();
        return view('appointments.index', compact('addresses'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                "appointment_address" => "required|exists:appointment_addresses,id",
                "date" => "required|date",
                "date_second" => "nullable|date",
                "time_slot" => "required|exists:appointment_timeslots,id",
                "time_slot_second" => "nullable|exists:appointment_timeslots,id",
                "name" => "required|string",
                "phone" => "required|string",
                "email" => "required|email",
                "comments" => "nullable|string",
            ]
        );
        Appointment::create(
            [
                "appointment_address_id" => $request->appointment_address,
                "date" => $request->date,
                "date_second" => $request->date_second,
                "appointment_timeslot_id" => $request->time_slot,
                "second_appointment_timeslot_id" => $request->time_slot_second,
                "name" => $request->name,
                "phone" => $request->phone,
                "email" => $request->email,
//                "address" => $request->address,
//                "city" => $request->city,
//                "state" => $request->state,
//                "zip" => $request->zip,
                "comments" => $request->comments
            ]
        );
        $details = [];
        $details['form_title'] = 'Open House Sign-Up';
        $address = AppointmentAddress::findOrFail($request->appointment_address);
        $time_slot = AppointmentTimeslot::findOrFail($request->time_slot);
        $time_slot_second = AppointmentTimeslot::find($request->time_slot_second);
        $details['appointment_address'] = $address->title;
        $details['date'] = $request->date;
        $details['time_slot'] = $time_slot->title;
        $details['second_date'] = $request->date_second;
        $details['second_time_slot'] = $time_slot_second ? $time_slot_second->title : null;

        foreach ($request->except('_token', 'to_email', 'appointment_address', 'date', 'date_second', 'time_slot', 'time_slot_second') as $key => $val)
            $details[strtolower($key)] = $val;

        $formController = new FormController;
        $to = $formController->getEmails('Open House Signup');

        $to[] = $address->email;
        $to[] = $request->email;
        $cc = [];
        Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));

        if (request()->wantsJson())
            return response()->json('Success');

        return back()->with('message', 'Appointment Created');
    }

    public function show(Appointment $appointment)
    {
    }

    public function edit(Appointment $appointment)
    {
    }

    public function update(Request $request, Appointment $appointment)
    {
    }

    public function destroy(Appointment $appointment)
    {
    }
}
