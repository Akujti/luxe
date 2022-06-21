<?php

namespace App\Http\Controllers\Coaching;

use PDF;
use Exception;
use Illuminate\Http\Request;
use App\Mail\GeneralMailTemplate;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Mail;

class CoachingController extends Controller
{
    public function index() {
        return view('pages.coaching.index');
    }
    public function form() {
        return view('pages.coaching.coaching-form');
    }
    public function formpdf(Request $req) {
        $details = $req->all();
        $pdf = PDF::loadView('pages.coaching.coaching-form-pdf', $details);
        return $pdf->download($details['full_name'] . '.pdf');
    }
    public function submitform(Request $req) {
        try {
            $details = [];
            foreach ($req->except('_token', 'to_email', 'agreement_type') as $key => $val) {
                $details[strtolower($key)] = $val;
            }
            $details['agreement'] = env('APP_URL') . "/user/coaching/form/pdf?full_name=$req->full_name&enrollment_type=$req->enrollment_type&date_signed=$req->date_signed&name_of_cardholder=$req->name_of_cardholder&address_of_cardholder=$req->address_of_cardholder&credit_card_numbers=$req->credit_card_numbers&expiration_date=$req->expiration_date&cvv=$req->cvv&type_of_credit_card=$req->type_of_credit_card";
            $formController = new FormController();
            $to = $formController->getEmails($req->form_title);
            array_push($to, $req->agent_email);
            $cc = [];
            Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }

        return redirect()->back()->with('message', 'Coaching form has been submitted!');
    }
}
