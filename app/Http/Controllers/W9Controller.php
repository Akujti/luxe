<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMailTemplate;
use App\Models\W9;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class W9Controller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'text_9' => 'nullable|string|min:9|max:9',
            'text_10' => 'nullable|string|min:9|max:9',
        ], [
            'text_9.min' => 'Social security number should be 9 characters long',
            'text_10.min' => 'Employer ID number should be 9 characters long'
        ]);

        $form = W9::create(
            [
                'user_id' => auth()->user()->id,
                'text_1' => $request['text_1'],
                'text_2' => $request['text_2'],
                'text_3' => $request['text_3'],
                'text_3_1' => $request['text_3_1'],
                'select_1' => $request['select_1'],
                'text_4' => $request['text_4'],
                'text_4_1' => $request['text_4_1'],
                'text_5' => $request['text_5'],
                'text_6' => $request['text_6'],
                'text_7' => $request['text_7'],
                'text_8' => $request['text_8'],
                'text_9' => $request['text_9'],
                'text_10' => $request['text_10'],
                'signature' => $request['text_11'],
                'date' => $request['text_12'],
            ]
        );

        $details = [];
        $details['form_title'] = 'W-9 Form';
        $details['agreement'] = route('w-9.download', $form->id);
        $to = ['operations@luxeknows.com', auth()->user()->email];
        $cc = [];
        Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));

        return redirect()->back()->with('message', 'Form submitted. Check your email!');
    }

    public function download(W9 $id)
    {
        $pdf = PDF::loadView('w-9.pdf', $id->toArray());
        return $pdf->download('W-9.pdf');
    }
}
