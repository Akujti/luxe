<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Mail\MarketingRequestMail;
use App\Models\Event;
use App\Models\MarketingCategory;
use App\Models\Template;
use App\Models\TemplateField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $details['category'] = $marketingCategory->title;
        $details['template'] = $template->title;
        $details['template link'] = env('APP_URL') . '/marketing/' . $marketingCategory->id . '/' . $template->id;
        foreach ($request->except('_token') as $key => $val) {
            if ($request->hasFile($key)) {
                $name = time() . Str::random(10) . '.' . $val->getClientOriginalExtension();
                $path = Storage::put('public/images/marketing', $val, 'public');
                $val = env('APP_URL') . Storage::url($path);
            }
            $details[strtolower($key)] = $val;
        }
        Mail::to('edin.vllaco@gmail.com')->send(new MarketingRequestMail($details));

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
        $request->validate(['name' => 'required',
            'type' => 'required']);
        TemplateField::create(['name' => $request->name,
            'type' => $request->type,
            'template_id' => $template->id,]);
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

}
