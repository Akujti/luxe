<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Template;
use App\Mail\BookingMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TemplateField;
use App\Models\MarketingCanva;
use App\Models\TemplateSubmit;
use App\Models\MarketingCategory;
use App\Models\MarketingTemplate;
use App\Mail\MarketingRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\MarketingCanvaCategory;
use App\Models\MarketingCanvaTemplate;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CanvaMarketing\AddRequest;
use App\Http\Requests\CanvaMarketing\DeleteRequest;
use App\Http\Requests\CanvaMarketing\UpdateRequest;
use App\Http\Requests\CanvaMarketing\Category\AddCategoryRequest;
use App\Http\Requests\CanvaMarketing\Template\AddTemplateRequest;
use App\Http\Requests\CanvaMarketing\Category\DeleteCategoryRequest;
use App\Http\Requests\CanvaMarketing\Category\UpdateCategoryRequest;
use App\Http\Requests\CanvaMarketing\Template\DeleteTemplateRequest;
use App\Http\Requests\CanvaMarketing\Template\UpdateTemplateRequest;

class MarketingTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_admin()
    {
        $canvas = MarketingCanva::orderBy('order', 'asc')->paginate(15);
        $last_order = MarketingCanva::latest()->first()->order ?? 0;
        ++$last_order;
        return view('admin.marketing.canva.index', compact('canvas', 'last_order'));
    }

    public function admin_categories($id)
    {
        $canva = MarketingCanva::with('categories')->find($id);
        $last_order = MarketingCanvaCategory::where('category_id', $id)->latest()->first()->order ?? 0;
        ++$last_order;

        return view('admin.marketing.canva.categories', compact('canva', 'last_order'));
    }
    public function admin_templates($marketing_id, $category_id)
    {
        $category = MarketingCanvaCategory::with('templates')->find($category_id);
        $last_order = MarketingCanvaTemplate::where('template_id', $category_id)->latest()->first()->order ?? 0;
        ++$last_order;

        return view('admin.marketing.canva.templates', compact('category', 'last_order'));
    }

    public function index()
    {
        $marketing_categories = MarketingCanva::orderBy('order', 'asc')->get();
        if (request()->wantsJson()) {
            return response()->json(['categories' => $marketing_categories]);
        }
        return view('pages.marketing_templates.categories', compact('marketing_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AddRequest $req)
    {
        $canva = new MarketingCanva;

        $canva->title = $req->title;

        $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
        $path = $req->image->storeAs('/marketing/canva', $name, 'public');;
        $canva->image = $path;
        $canva->order = $req->order ?? ++MarketingCanva::latest()->first()->order;
        $canva->save();

        return back()->with('message', 'Created successfully');
    }

    public function create_category(AddCategoryRequest $req)
    {
        $canva_category = new MarketingCanvaCategory;

        $canva_category->title = $req->title;

        $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
        $path = $req->image->storeAs('/marketing/canva', $name, 'public');;
        $canva_category->image = $path;
        $canva_category->category_id = $req->category_id;
        $canva_category->order = $req->order ?? ++MarketingCanvaCategory::where('category_id', $req->category_id)->latest()->first()->order;
        $canva_category->save();

        return back()->with('message', 'Created successfully');
    }

    public function create_template(AddTemplateRequest $req)
    {
        $canva_template = new MarketingCanvaTemplate;

        $canva_template->title = $req->title;

        $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
        $path = $req->image->storeAs('/marketing/canva', $name, 'public');;
        $canva_template->image = $path;
        $canva_template->template_id = $req->template_id;
        $canva_template->order = $req->order ?? ++MarketingCanvaTemplate::latest()->first()->order;
        $canva_template->url = $req->url;
        $canva_template->save();

        return back()->with('message', 'Created successfully');
    }

    public function update(UpdateRequest $req)
    {
        $canva = MarketingCanva::find($req->id);

        $canva->title = $req->title;

        if ($req->image) {
            $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
            $path = $req->image->storeAs('/marketing/canva', $name, 'public');;
            $canva->image = $path;
        }
        $canva->order = $req->order ?? ++MarketingCanva::latest()->first()->order;
        $canva->save();

        return back()->with('message', 'Created successfully');
    }

    public function update_category(UpdateCategoryRequest $req)
    {
        $canva_category = MarketingCanvaCategory::find($req->id);

        $canva_category->title = $req->title;

        if ($req->image) {
            $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
            $path = $req->image->storeAs('/marketing/canva', $name, 'public');;
            $canva_category->image = $path;
        }
        $canva_category->order = $req->order ?? ++MarketingCanvaCategory::latest()->first()->order;
        $canva_category->save();

        return back()->with('message', 'Created successfully');
    }

    public function update_template(UpdateTemplateRequest $req)
    {
        $canva_category = MarketingCanvaTemplate::find($req->id);

        $canva_category->title = $req->title;
        $canva_category->url = $req->url;

        if ($req->image) {
            $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
            $path = $req->image->storeAs('/marketing/canva', $name, 'public');;
            $canva_category->image = $path;
        }
        $canva_category->order = $req->order ?? ++MarketingCanvaTemplate::latest()->first()->order;
        $canva_category->save();

        return back()->with('message', 'Created successfully');
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
        return view('pages.marketing_templates.fields', compact('template'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MarketingCategory $marketingCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MarketingCanva $marketingCanva)
    {
        $templates = $marketingCanva->categories()->orderBy('order', 'asc')->get();
        return view('pages.marketing_templates.templates', compact('templates', 'marketingCanva'));
    }

    public function template(MarketingCanva $marketingCanva, MarketingCanvaCategory $template)
    {
        $templates = $template->templates()->orderBy('order', 'asc')->get();
        return view('pages.marketing_templates.template', compact('templates', 'template'));
    }

    public function edit(MarketingCategory $marketingCategory)
    {
        //
    }

    public function destroy(DeleteRequest $req)
    {
        $row = MarketingCanva::find($req->id);
        if ($row) {
            $row->delete();
        }
        return back()->with('message', 'Deleted successfully');
    }

    public function destroy_category(DeleteCategoryRequest $req)
    {
        $row = MarketingCanvaCategory::find($req->id);
        if ($row) {
            $row->delete();
        }
        return back()->with('message', 'Deleted successfully');
    }

    public function destroy_template(DeleteTemplateRequest $req)
    {
        $row = MarketingCanvaTemplate::find($req->id);
        if ($row) {
            $row->delete();
        }
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


    public function deleteTemplate(MarketingCategory $marketingCategory, Template $template)
    {
        $template->delete();
        return redirect()->route('marketing.request', $marketingCategory)->with('message', 'Deleted successfully');
    }
}
