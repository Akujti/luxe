<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\EmailsForm;
use App\Models\FormSubmit;
use Illuminate\Http\Request;
use App\Models\AgentTransaction;
use App\Http\Requests\Form\UpdateRequest;
use App\Http\Requests\Form\UpdateFormRequest;
use App\Models\CustomSection;

class AdminController extends Controller
{
    public function index()
    {
        $stats = $this->stats();
        $news_feed = CustomSection::whereTitle('News Feed')->first();
        return view('admin.index', compact('stats', 'news_feed'));
    }
    public function forms()
    {
        $forms = Form::with('emails')->orderBy('title', 'asc')->paginate(20);
        return view('admin.forms', compact('forms'));
    }

    public function update(UpdateFormRequest $req)
    {
        $form = Form::find($req->id);
        $form->fill($req->only(['title', 'path']));
        $form->save();

        return back()->with('message', 'Successfully Updated');
    }
    public function delete(Request $req)
    {
        $form = Form::find($req->id);
        if ($form) {
            $form->delete();
        }

        return back()->with('message', 'Successfully Updated');
    }

    public function update_form(UpdateRequest $req)
    {
        $form = Form::find($req->id);

        $form->emails()->delete();

        if ($req->emails) {
            $emailModels = [];
            foreach ($req->emails as $row) {
                $emailModels[] = ["email" => $row];
            }

            $form->emails()->createMany($emailModels);
        }

        return back()->with('message', 'Updated Successfully');
    }

    public function stats()
    {
        $data[0] = FormSubmit::where('form_title', 'Pre-Approval Form')->count();
        $data[1] = FormSubmit::where('form_title', 'Logo Creation Request')->count();
        $data[2] = FormSubmit::where('form_title', 'TEAM DADE - ZILLOW LEADS WEEKLY UPDATE')->count();
        $data[3] = FormSubmit::where('form_title', 'TEAM FLEX - ZILLOW LEADS WEEKLY UPDATE')->count();
        $top_agents = AgentTransaction::orderBy('total_amounts', 'DESC')->take(5)->get();
        $data[4] = $top_agents->pluck('agent_name');
        $data[5] = $top_agents->pluck('total_amounts');
        return collect($data);
    }
}
