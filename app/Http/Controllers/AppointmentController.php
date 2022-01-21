<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentAddress;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

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
