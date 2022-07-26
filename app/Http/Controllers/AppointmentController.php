<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMailTemplate;
use App\Models\AgentEmail;
use App\Models\Appointment;
use App\Models\AppointmentAddress;
use App\Models\AppointmentTimeslot;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return response()->json([Appointment::where('date', $request->date)->get(), $request->all()]);
    }
    public function getAddresses()
    {
        return response()->json(AppointmentAddress::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addresses = AppointmentAddress::get();
        return view('appointments.index', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                "appointment_address" => "required|exists:appointment_addresses,id",
                "date" => "required|date",
                "time_slot" => "required|exists:appointment_timeslots,id",
                "name" => "required|string",
                "phone" => "required|string",
                "email" => "required|email",
                "address" => "nullable|string",
                "city" => "nullable|string",
                "state" => "nullable|string",
                "zip" => "nullable|string",
                "comments" => "nullable|string",
            ]
        );
        Appointment::create(
            [
                "appointment_address_id" => $request->appointment_address,
                "date" => $request->date,
                "appointment_timeslot_id" => $request->time_slot,
                "name" => $request->name,
                "phone" => $request->phone,
                "email" => $request->email,
                "address" => $request->address,
                "city" => $request->city,
                "state" => $request->state,
                "zip" => $request->zip,
                "comments" => $request->comments
            ]
        );
        $details = [];
        $details['form_title'] = 'Open House Sign-Up';
        $address = AppointmentAddress::findOrFail($request->appointment_address);
        $time_slot = AppointmentTimeslot::findOrFail($request->time_slot);
        $details['appointment_address'] = $address->title;
        $details['time_slot'] = $time_slot->title;
        foreach ($request->except('_token', 'to_email', 'appointment_address', 'time_slot') as $key => $val) {
            $details[strtolower($key)] = $val;
        }
        // $to = ['support@luxeknows.com', 'receptionist@luxeknows.com', 'email@luxeknows.com'];
        // $email_list = AgentEmail::get();
        // foreach ($email_list as $email) {
        //     array_push($to, $email->email);
        // }

        $formController = new FormController;
        $to = $formController->getEmails('Open House Signup');

        array_push($to, $address->email);
        array_push($to, $request->email);
        $cc = [];
        Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));

        if (request()->wantsJson()) {
            return response()->json('Success');
        }

        return back()->with('message', 'Appointment Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
