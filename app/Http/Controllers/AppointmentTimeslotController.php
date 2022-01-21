<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentTimeslot;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AppointmentTimeslotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json([AppointmentTimeslot::get(), $request->all()]);
    }

    public function all(Request $request)
    {
        $ids = Appointment::where('date', $request->date)->get()->pluck('appointment_timeslot_id');
        return response()->json(['time_slots' => AppointmentTimeslot::whereNotIn('id', $ids)->get()]);
    }


    /**
     * Show the form for creating a new resource.
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppointmentTimeslot  $appointmentTimeslot
     * @return \Illuminate\Http\Response
     */
    public function show(AppointmentTimeslot $appointmentTimeslot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppointmentTimeslot  $appointmentTimeslot
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentTimeslot $appointmentTimeslot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppointmentTimeslot  $appointmentTimeslot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppointmentTimeslot $appointmentTimeslot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppointmentTimeslot  $appointmentTimeslot
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppointmentTimeslot $appointmentTimeslot)
    {
        //
    }
}
