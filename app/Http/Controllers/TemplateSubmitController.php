<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMailTemplate;
use App\Models\Form;
use App\Models\MarketingMenu;
use Illuminate\Support\Str;
use App\Models\TemplateSubmit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class TemplateSubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = MarketingMenu::latest()->paginate(30);
        return view('pages.template-submits.index', compact('submissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $submission = MarketingMenu::findOrFail($id);
        return view('pages.template-submits.show', compact('submission'));
    }

    public function show_agent($id)
    {
        $submission = MarketingMenu::findOrFail($id);
        return view('marketing-orders.show', compact('submission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateSubmit $templateSubmit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form = MarketingMenu::findOrFail($id);
        $form->status = $request->status;
        $form->answer = $request->answer;
        $form->save();

        $details['form_title'] = "Marketing Menu - Milestone";
        $details['status'] = $request->status;
        $details['requested_information'] = $request->answer;
        $details['link'] = '<a href="' . route('my.marketing.orders.show', $form) . '">Click to see your order</a>';

        try {
            Mail::to($form->user->email)->send(new GeneralMailTemplate($details));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'There was a problem sending email to agent!');
        }

        return back()->with('message', 'Submission Updated');
    }

    public function update_marketing_order(Request $request, $id)
    {
        try {
            $form = MarketingMenu::findOrFail($id);
            $details = json_decode($form->details, true);
            if ($request->hasFile("files")) {
                $files = $request->file('files');
                $counter = 1;
                foreach ($files as $file) {
                    $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/new-storage/images/marketing'), $name);
                    $val = 'new-storage/images/marketing/' . $name;
                    $details['reply_file_' . $counter++] = $val;
                }
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Form isn\'t saved, there was a problem with the entered data');
        }

        try {
            $form->update([
                'details' => json_encode($details),
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Form couldn\'t be saved');
        }

        try {
            $to = $this->getEmails('MARKETING MENU');
            array_push($to, auth()->user()->email);
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

    public function getEmails($title, $extraEmail = [])
    {
        $form = Form::where('title', $title)->first();

        $data = $form ? $form->emails()->get()->pluck('email')->toArray() : [];
        if ($extraEmail) {
            $data = array_merge($data, $extraEmail);
        }
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemplateSubmit  $templateSubmit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateSubmit $templateSubmit)
    {
        //
    }
}
