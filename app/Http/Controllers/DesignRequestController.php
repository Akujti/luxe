<?php

namespace App\Http\Controllers;

use App\Models\DiyTemplate;
use App\Models\DiyTemplateCategory;
use Illuminate\Http\Request;
use App\Models\MarketingCategory;

class DesignRequestController extends Controller
{
    public function index()
    {
        $marketing_categories = MarketingCategory::all();

        $diy_categories = DiyTemplateCategory::with('categories')->whereNull('parent_id')->orderBy('order', 'asc')->get();
        if (request()->wantsJson()) {
            return response()->json($diy_categories);
        }
        return view('pages.marketing_requests.categories', compact('marketing_categories', 'diy_categories'));
    }

    public function getTemplates(Request $req)
    {
        $category_id = $req->input('category_id');

        $templates = DiyTemplate::where('category_id', $category_id)->orderBy('order', 'asc')->get();

        return response()->json($templates);
    }

    public function template($template_id)
    {
        $template = DiyTemplate::find($template_id);
        return response()->json($template);
    }
}
