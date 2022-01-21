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

    public function all()
    {
        return response()->json(AppointmentAddress::get());
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppointmentAddress  $appointmentAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppointmentAddress $appointmentAddress)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        $appointmentAddress->update(['title' => $request->title]);
        return back()->with('message', 'Address Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppointmentAddress  $appointmentAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppointmentAddress $appointmentAddress)
    {
        $appointmentAddress->delete();
        return back()->with('message', 'Address Deleted');
    }
}
