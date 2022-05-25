<?php

namespace App\Http\Controllers;

use App\Models\DiyTemplate;
use App\Models\DiyTemplateCategory;
use App\Models\File;
use App\Models\Folder;
use App\Models\MarketingCategory;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
        $folder_id = Folder::where('title', 'XNvgkxNbjU')->first()->id;
        $guides = File::where('folder_id', $folder_id)->get();
        $marketing_requests = MarketingCategory::orderBy('id', 'desc')->get();
        $diy_templates = DiyTemplateCategory::whereNull('parent_id')->orderBy('order', 'asc')->get();

        $social_media_posts = [];
        $social_media_id = DiyTemplateCategory::where('title', 'Social Media Posts')->first();
        if($social_media_id) {
            $social_media_posts = DiyTemplate::where('category_id', $social_media_id->id)->orderBy('order', 'asc')->get();
        }
        return view('home-page', compact('guides', 'marketing_requests', 'diy_templates', 'social_media_posts'));
    }
}
