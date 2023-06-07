<?php

namespace App\Http\Controllers\Coaching;

use PDF;
use Exception;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Mail\GeneralMailTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FormController;

class CoachingController extends Controller
{
    public function index()
    {
        return view('pages.coaching.index');
    }

    public function form()
    {
        $formInfo = null;

        $formSql = Form::where('title', 'LIKE', 'Luxe Coaching')->first();
        if ($formSql) {
            $formInfo = $formSql;
        }
        return view('pages.coaching.coaching-form', ['formInfo' => $formInfo]);
    }

    public function formpdf(Request $req)
    {
        $details = $req->all();
        $pdf = PDF::loadView('pages.coaching.coaching-form-pdf', $details);
        return $pdf->download($details['full_name'] . '.pdf');
    }

    public function submitform(Request $req)
    {
        try {
            $details = [];
            foreach ($req->except('_token', 'to_email', 'agreement_type') as $key => $val) {
                $details[strtolower($key)] = $val;
            }
            $details['agreement'] = env('APP_URL') . "/user/coaching/form/pdf?full_name=$req->full_name&date_signed=$req->date_signed";
            $formController = new FormController();
            $to = $formController->getEmails($req->form_title);
            array_push($to, $req->agent_email);
            $cc = [];
            Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }

        session()->flash('modal', 'Success');
        return redirect()->back()->with('message', 'Coaching form has been submitted!');
    }
}
