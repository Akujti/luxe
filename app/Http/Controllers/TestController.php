<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentTimeslot;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $ids = Appointment::where('date', '2022-01-22')->get()->pluck('appointment_timeslot_id');
        $t = AppointmentTimeslot::whereNotIn('id', $ids)->get();
        return response()->json($t);
    }

    public function submit(Request $request)
    {
        return response()->json($request->all());
    }
}
