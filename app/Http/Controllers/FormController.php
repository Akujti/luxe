<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use App\Mail\GeneralMailTemplate;
use App\Models\Form;
use App\Models\FormSubmit;
use App\Models\Listing;
use App\Models\MarketingMenu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
            FormSubmit::create([
                'form_title' => $request->form_title,
                'status' => 0,
                'agent_name' => $request->agent,
                'agent_email' => $request->agent_email,
                'details' => json_encode($details),
            ]);

            $form = Form::where('title', 'Pre-Approval Form')->first();

            $to = $form ? $form->emails()->get()->pluck('email')->toArray() : ['email@luxeknows.com'];
            Mail::to($to)->send(new FormMail($details));
            return back()->with('message', 'Sent Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Ooops! try again later!');
        }
    }

    public function general_form_index($folder, $form)
    {
        $formInfo = null;

        if ($form == 'zillow-leads-weekly-update') {
            $formSql = Form::where('title', 'LIKE', 'ZILLOW BUYER LEADS WEEKLY UPDATE')->first();
        } else {
            $formSql = Form::where('title', 'LIKE', "%" . Str::title(str_replace('-', ' ', $form)) . "%")->first();
        }
        if ($formSql) {
            $formInfo = $formSql;
        }
        return view('pages/form/' . $folder . '/' . $form, ['formInfo' => $formInfo]);
    }

    public function marketing_budget_form()
    {
        return view('pages/form/other/marketing-budget');
    }

    public function agent_form()
    {
        return view('pages/form/agent_referrals/agent-form');
    }

    public function test(Request $request)
    {
        foreach (json_decode($request->form) as $key => $value) {
            $request->request->set($key, $value);
        }
        //        return $request->all();
        $request->headers->set('Accept', 'application/json');
        return $this->general_form_post($request);
    }

    public function general_form_post(Request $request)
    {
        try {
            $details = [];

            Log::channel('stack')->info('Form Submission');
            Log::channel('stack')->info(json_encode($request->all()));

            if (isset($request->agent_full_name))
                $details['form_agent_full_name'] = $request->agent_full_name;
            else
                $details['form_agent_full_name'] = auth()->user()->profile->fullname;
            if (isset($request->agent_email))
                $details['form_agent_email'] = $request->agent_email;
            else
                $details['form_agent_email'] = auth()->user()->email;
            foreach ($request->except('_token', 'to_email', 'form') as $key => $val) {
                if ($request->hasFile($key)) {
                    if (is_array($request->file($key))) {
                        $counter = 1;
                        foreach ($request->file($key) as $file) {
                            $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                            $file->move(public_path('/new-storage/images/marketing'), $name);
                            $details[$key . ' - ' . $counter++] = 'new-storage/images/marketing/' . $name;
                        }
                    } else {
                        $name = time() . Str::random(10) . '.' . $val->getClientOriginalExtension();
                        $request->file($key)->move(public_path('/new-storage/images/marketing'), $name);
                        $val = 'new-storage/images/marketing/' . $name;
                    }
                }
                if ($request->form_title == 'LUXE Coaching')
                    $details['agreement'] = env('APP_URL') . "/user/coaching/form/pdf?full_name=$request->full_name&date_signed=$request->date_signed";
                if ($request->form_title == 'Get Contract Help') {
                    if (strtolower($key) != 'agent_full_name' && strtolower($key) != 'agent_email')
                        $details[strtolower($key)] = $val;
                } else
                    if (is_array($val)) {
                        if (!$request->hasFile($key))
                            $details[strtolower($key)] = implode(", ", $val);
                    } else
                        $details[strtolower($key)] = $val;
            }
        } catch (Exception $e) {
            if ($request->wantsJson()) {
                return response()->json("Form isn\'t saved, there was a problem with the entered data", 500);
            }
            return redirect()->back()->with('error', 'Form isn\'t saved, there was a problem with the entered data');
        }

        if (!$request->has('form_verbiages_text')) {
            $form = Form::where('title', $request->form_title)->first();
            if ($form)
                $details['form_verbiages_text'] = $form->email_verbiages_text;
        }

        try {
            FormSubmit::create([
                'form_title' => $request->form_title,
                'status' => 0,
                'agent_name' => $request->agent_full_name ?? auth()->user()->profile->fullname,
                'agent_email' => $request->agent_email ?? auth()->user()->email,
                'details' => json_encode($details),
            ]);
        } catch (Exception $e) {
            if ($request->wantsJson()) {
                return response()->json("Form couldn\'t be saved", 500);
            }
            return redirect()->back()->with('error', 'Form couldn\'t be saved');
        }

        try {
            $to = [];
            if (isset($request->form_title_value)) {
                $form = Form::where('title', $request->form_title_value)->first();
                $to = $this->getEmails($request->form_title_value, $request->to_email);
            } else {
                $form = Form::where('title', $request->form_title)->first();
                $to = $this->getEmails($request->form_title, $request->to_email);
            }
            if ($request->form_title_value == "CLOSING COORDINATORS" && $request->is_this_luxe_zillow_lead == 'Yes') {
                array_push($to, 'zillow@luxeknows.com');
            }
            if (!$form->hide_agent_email) {
                if (isset($request->agent_email))
                    array_push($to, $request->agent_email);
                else
                    array_push($to, auth()->user()->email);
            }

            $cc = [];
            $bcc = [];
            try {
                $bcc = $form->emails()->where('bcc', true)->get()->pluck('email')->toArray();
            } catch (\Throwable $th) {
                //throw $th;
            }
            try {
                Mail::to($to)->cc($cc)->bcc($bcc)->send(new GeneralMailTemplate($details));
            } catch (\Exception $exception) {
                Log::alert($exception);
                if ($request->wantsJson()) {
                    return response()->json('Error while sending email', 500);
                }
            }
        } catch (\Throwable $th) {
            Log::alert($th);
            if ($request->wantsJson()) {
                return response()->json($th, 500);
            }
            return redirect()->back()->with('error', 'Form is saved but there was a problem sending the email');
        }

        if ($request->wantsJson()) {
            return response()->json('success');
        }

        $formItemsVerbiageModal = ["Join Zillow Seller Team", "Join Zillow", "CINC LEADS WEEKLY UPDATE", "Request Zillow Nurtures", "ZILLOW BUYER LEADS WEEKLY UPDATE", "Join CINC Buyer Team", "CINC LEADS WEEKLY UPDATE", "Request Your Agent Referral", "LUXE Coaching"];

        if (in_array($request->form_title, $formItemsVerbiageModal))
            session()->flash('modal', 'Success');
        try {
            if ($request->form_title == "Photoshoots For Listings" || $request->form_title == "Submit A Zillow Listing Agreement") {
                Listing::create(
                    [
                        'user_id' => auth()->id(),
                        'address' => $request->property_address,
                        'list_date' => $request->listing_date ?? now()->addDays(14),
                        'main_image' => 'images/image-coming-soon-placeholder.png',
                        'images' => json_encode([])
                    ]
                );
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('warning', 'Form has been submitted, but it wasn\'t added on the Coming Soon Listings!');
        }
        session()->flash('formPost', 'Form submitted successfully.');
        return redirect()->back()->with('message', 'Form has been submitted!');
    }

    public function file_download()
    {
        $path = request()->path;
        if (str_starts_with($path, 'storage/')) {
            $path = str_replace("storage/", "new-storage/", $path);
        }
        return response()->download($path);
    }

    public function submitAgreementAgentForm(Request $request)
    {
        try {
            $details = [];
            foreach ($request->except('_token', 'to_email', 'agreement_type') as $key => $val) {
                $details[strtolower($key)] = $val;
            }
            $details['agreement'] = env('APP_URL') . '/' . $request->agreement_type . '?mentor_name=' . $request->mentor_name . '&agent_full_name=' . $request->agent_full_name . '&date_signed=' . $request->date_signed;
            $to = $request->to_email;
            array_push($to, $request->agent_email);
            $cc = [];
            Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }

        return redirect()->back()->with('message', 'Agreement has been submitted!');
    }

    public function getEmails($title, $extraEmail = [])
    {
        $form = Form::where('title', $title)->first();

        $data = $form ? $form->emails()->where('bcc', false)->get()->pluck('email')->toArray() : [];
        if ($extraEmail) {
            $data = array_merge($data, $extraEmail);
        }
        return $data;
    }

    public function submit_marketing_menu(Request $request)
    {
        $request->validate(
            [
                "agent_full_name" => "required",
                "agent_number" => "required",
                "agent_email" => "required|email",
                "option" => "required",
                "notes" => "nullable",
                "files" => "nullable",
            ]
        );

        try {
            $details = [];
            $details['form_title'] = "Marketing Menu";
            $details['agent_full_name'] = $request->agent_full_name;
            $details['agent_number'] = $request->agent_number;
            $details['agent_email'] = $request->agent_email;
            $details['option'] = $request->option;
            $details['notes'] = $request->notes;
            $details['price'] = $request->price;
            if ($request->hasFile("files")) {
                $files = $request->file('files');
                $counter = 1;
                foreach ($files as $file) {
                    $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/new-storage/images/marketing'), $name);
                    $val = 'new-storage/images/marketing/' . $name;
                    $details['file_' . $counter++] = $val;
                }
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Form isn\'t saved, there was a problem with the entered data');
        }

        try {
            MarketingMenu::create([
                'user_id' => auth()->user()->id,
                'status' => 'Pending',
                'details' => json_encode($details),
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Form couldn\'t be saved');
        }

        try {
            if (isset($request->form_title_value)) {
                $to = $this->getEmails($request->form_title_value, $request->to_email);
            } else {
                $to = $this->getEmails($request->form_title, $request->to_email);
            }
            // array_push($to, $request->agent_email);
            $cc = [];

            try {
                Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));
            } catch (\Exception $exception) {
                Log::alert($exception);
            }
        } catch (\Throwable $th) {
            Log::alert($th);
            return redirect()->back()->with('error', 'Form is saved but there was a problem sending the email');
        }
        return redirect()->back()->with('message', 'Form has been submitted!');
    }
}
