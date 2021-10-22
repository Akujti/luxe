<?php

namespace App\Http\Controllers;

use App\Models\FormSubmit;
use Illuminate\Http\Request;

class FormSubmitController extends Controller
{
    public function index()
    {
        $submissions = FormSubmit::latest()->get();
        return view('pages.form-submits.index', compact('submissions'));
    }

    public function show(FormSubmit $formSubmit)
    {
        $details = json_decode($formSubmit->details);
        return view('pages.template-submits.show', compact('details'));
    }

    public function update(Request $request, FormSubmit $formSubmit)
    {
        $formSubmit->status = 1;
        $formSubmit->save();
        return back()->with('message', 'Submission Updated');
    }
}
