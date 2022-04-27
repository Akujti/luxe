<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\Form\UpdateRequest;
use App\Models\EmailsForm;
use App\Models\FormSubmit;

class AdminController extends Controller
{
    public function index()
    {
        $stats = $this->stats();
        return view('admin.index', compact('stats'));
    }
    public function forms()
    {
        $forms = Form::with('emails')->orderBy('title', 'asc')->paginate(20);
        return view('admin.forms', compact('forms'));
    }

    public function update_form(UpdateRequest $req) {
        $form = Form::find($req->id);

        $form->emails()->delete();

        if($req->emails) {
            $emailModels = [];
            foreach($req->emails as $row) {
                $emailModels[] = ["email" => $row];
            }
            
            $form->emails()->createMany($emailModels);
        }

        return back()->with('message', 'Updated Successfully');
    }

    public function stats() {
        $data[0] = FormSubmit::where('form_title', 'Pre-Approval Form')->count();
        $data[1] = FormSubmit::where('form_title', 'Logo Creation Request')->count();
        $data[2] = FormSubmit::where('form_title', 'TEAM DADE - ZILLOW LEADS WEEKLY UPDATE')->count();
        $data[3] = FormSubmit::where('form_title', 'TEAM FLEX - ZILLOW LEADS WEEKLY UPDATE')->count();

        return collect($data);
    }
}
