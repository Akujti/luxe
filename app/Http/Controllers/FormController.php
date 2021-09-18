<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function index()
    {
        return view('pages.form.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'agent' => 'required',
            'full_address' => 'required',
            'time' => 'required',
            'loan_officer' => 'required',
            'additional' => 'required',
        ]);
        try {
            $details = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'agent' => $request->agent,
                'full_address' => $request->full_address,
                'time' => $request->time,
                'loan_officer' => $request->loan_officer,
                'additional' => $request->additional
            ];


            Mail::to('edin.vllaco@gmail.com')->send(new FormMail($details));
            return back()->with('message', 'Sent successfully.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Ooops! Try again later!');
        }
    }
}
