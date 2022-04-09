<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Mail\FormMail;
use App\Models\FormSubmit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\GeneralMailTemplate;
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
            'time' => 'required',
            'loan_officer' => 'required',
        ]);
        try {
            $details = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'agent' => $request->agent,
                'full_address' => $request->full_address ?? 'None',
                'time' => $request->time,
                'loan_officer' => $request->loan_officer,
                'additional' => $request->additional ?? 'None'
            ];
            $to = ['email@luxeknows.com'];
            $cc = ['alfonso@luxehomeloan.com', 'anais@luxehomeloan.com', 'lissette@luxehomeloan.com', 'monica@luxehomeloan.com', 'brandon@luxehomeloan.com'];
            Mail::to($to)->cc($cc)->send(new FormMail($details));

            FormSubmit::create([
                'form_title' => $request->form_title,
                'status' => 0,
                'agent_name' => $request->agent,
                'agent_email' => $request->agent_email,
                'details' => json_encode($details),
            ]);

            return back()->with('message', 'Sent Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Ooops! try again later!');
        }
    }
    public function general_form_index($folder, $form)
    {
        return view('pages/form/' . $folder . '/' . $form);
    }

    public function general_form_post(Request $request)
    {
        $details = [];
        $details['form_agent_full_name'] = $request->agent_full_name;
        $details['form_agent_email'] = $request->agent_email;
        foreach ($request->except('_token', 'to_email') as $key => $val) {
            if ($request->hasFile($key)) {
                $name = time() . Str::random(10) . '.' . $val->getClientOriginalExtension();
                $request->file($key)->move(public_path('/new-storage/images/marketing'), $name);
                // $path = Storage::put('public/images/marketing', $val, 'public');
                $val = 'new-storage/images/marketing/' . $name;
            }
            $details[strtolower($key)] = $val;
        }
        if (isset($request->form_title_value)) {
            $to = $this->getEmails($request->form_title_value, $request->to_email);
        } else {
            $to = $this->getEmails($request->form_title);
        }
        array_push($to, $request->agent_email);
        $cc = [];
        Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));

        FormSubmit::create([
            'form_title' => $request->form_title,
            'status' => 0,
            'agent_name' => $request->agent_full_name,
            'agent_email' => $request->agent_email,
            'details' => json_encode($details),
        ]);
        if ($request->wantsJson()) {
            return response()->json('success');
        }
        return redirect()->back()->with('message', 'Form has been submitted!');
    }

    public function file_download()
    {
        $path = request()->path;
        if (str_starts_with($path, 'storage/')) {
            $path = str_replace("storage/", "new-storage/", $path);
        }
        // dd($path);
        return response()->download($path);
    }

    public function submitAgreementAgentForm(Request $request)
    {
        $details = [];
        foreach ($request->except('_token', 'to_email', 'agreement_type') as $key => $val) {
            $details[strtolower($key)] = $val;
        }
        $details['agreement'] = env('APP_URL') . '/' . $request->agreement_type . '?mentor_name=' . $request->mentor_name . '&agent_full_name=' . $request->agent_full_name . '&date_signed=' . $request->date_signed;
        $to = $request->to_email;
        array_push($to, $request->agent_email);
        $cc = [];
        Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));

        return redirect()->back()->with('message', 'Agreement has been submitted!');
    }

    public function getEmails($title, $extraEmail = '')
    {
        $form = Form::where('title', $title)->firstOrFail();

        $data = $form->emails()->get()->pluck('email')->toArray();
        if ($extraEmail) {
            array_push($data, $extraEmail);
        }
        return $data;
    }
}
