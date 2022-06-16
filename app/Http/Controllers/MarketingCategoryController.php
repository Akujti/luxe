<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Template;
use App\Mail\BookingMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TemplateField;
use App\Models\TemplateSubmit;
use App\Mail\GeneralMailTemplate;
use App\Models\MarketingCategory;
use App\Mail\MarketingRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MarketingCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketing_categories = MarketingCategory::all();
        return view('pages.marketing_requests.categories', compact('marketing_categories'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function fields(MarketingCategory $marketingCategory, Template $template)
    {
        return view('pages.marketing_requests.fields', compact('template'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MarketingCategory $marketingCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MarketingCategory $marketingCategory)
    {
        $templates = $marketingCategory->templates()->latest()->get();
        return view('pages.marketing_requests.templates', compact('templates', 'marketingCategory'));
    }

    public function template(MarketingCategory $marketingCategory, Template $template)
    {
        return view('pages.marketing_requests.template', compact('template'));
    }

    public function sendEmail(Request $request, MarketingCategory $marketingCategory, Template $template)
    {
        $details = [];
        $details['form_agent_full_name'] = $request->form_agent_full_name;
        $details['form_agent_email'] = $request->form_agent_email;
        $details['category'] = $marketingCategory->title;
        $details['template'] = $template->title;
        $details['template link'] = env('APP_URL') . '/marketing/' . $marketingCategory->id . '/' . $template->id;
        foreach ($request->except('_token') as $key => $val) {
            if ($request->hasFile($key)) {
                $name = time() . Str::random(10) . '.' . $val->getClientOriginalExtension();
                // $path = Storage::put('public/images/marketing', $val, 'public');
                $request->file($key)->move(public_path('/new-storage/images/marketing'), $name);
                $val = env('APP_URL') . '/new-storage/images/marketing/' . $name;
            }
            $details[strtolower($key)] = $val;
        }

        Mail::to(['marketing@luxeknows.com', $request->form_agent_email])->send(new MarketingRequestMail($details));

        TemplateSubmit::create([
            'template_id' => $template->id,
            'status' => 0,
            'agent_name' => $request->form_agent_full_name,
            'agent_email' => $request->form_agent_email,
            'details' => json_encode($details),
        ]);

        return back()->with('message', 'Form has been submitted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MarketingCategory $marketingCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MarketingCategory $marketingCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MarketingCategory $marketingCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarketingCategory $marketingCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MarketingCategory $marketingCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarketingCategory $marketingCategory)
    {
        //
    }

    public function updateField(Request $request, TemplateField $field)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        $field->update([
            'name' => $request->name,
            'type' => $request->type
        ]);
        return back()->with('message', 'Updated successfully');
    }

    public function deleteField(TemplateField $field)
    {
        $field->delete();
        return back()->with('message', 'Deleted successfully');
    }

    public function addField(Request $request, MarketingCategory $marketingCategory, Template $template)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        TemplateField::create([
            'name' => $request->name,
            'type' => $request->type,
            'template_id' => $template->id,
        ]);
        return back()->with('message', 'Created successfully');
    }

    public function addTemplate(Request $request, MarketingCategory $marketingCategory)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|url'
        ], [
            'image.url' => 'Image must be a link.'
        ]);
        Template::create([
            'title' => $request->title,
            'image' => $request->image,
            'category_id' => $marketingCategory->id,
        ]);
        return back()->with('message', 'Created successfully');
    }

    public function updateTemplate(Request $request, MarketingCategory $marketingCategory, Template $template)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|url'
        ], [
            'image.url' => 'Image must be a link.'
        ]);
        $template->update([
            'title' => $request->title,
            'image' => $request->image
        ]);
        return back()->with('message', 'Updated successfully');
    }

    public function deleteTemplate(MarketingCategory $marketingCategory, Template $template)
    {
        $template->delete();
        return redirect()->route('marketing.request', $marketingCategory)->with('message', 'Deleted successfully');
    }

    public function sendEmailForm(Request $req) {
        $cc = [];
        $details = [];
        foreach ($req->except('_token', 'to_email') as $key => $val) {
            if($key == 'colors') {
                $details[strtolower($key)] = $val ?? 'Luxe Colors';
            } else {
                $details[strtolower($key)] = $val;
            }
        }

        $to = ['marketing@luxeknows.com', auth()->user()->email];
        Mail::to($to)->cc($cc)->send(new GeneralMailTemplate($details));

        return back()->with('message', 'Submitted successfully');
    }
}
