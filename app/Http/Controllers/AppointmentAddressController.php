<?php

namespace App\Http\Controllers;

use App\Models\AppointmentAddress;
use Illuminate\Http\Request;

class AppointmentAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = AppointmentAddress::get();
        return view('appointments.addresses.index', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        AppointmentAddress::create(['title' => $request->title]);
        return back()->with('message', 'Address Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppointmentAddress  $appointmentAddress
     * @return \Illuminate\Http\Response
     */
    public function show(AppointmentAddress $appointmentAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppointmentAddress  $appointmentAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentAddress $appointmentAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppointmentAddress  $appointmentAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppointmentAddress $appointmentAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppointmentAddress  $appointmentAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppointmentAddress $appointmentAddress)
    {
        //
    }
}
