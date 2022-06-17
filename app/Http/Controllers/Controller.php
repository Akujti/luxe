<?php

namespace App\Http\Controllers;

use App\Models\DiyTemplate;
use App\Models\DiyTemplateCategory;
use App\Models\EmailBlastHomePage;
use App\Models\Event;
use App\Models\File;
use App\Models\Folder;
use App\Models\MarketingCategory;
use App\Models\Video\Video;
use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
        $videos = Video::orderBy('views', 'desc')->take(10)->get();
        $folder_id = Folder::where('title', 'XNvgkxNbjU')->first()->id;
        $guides = File::where('folder_id', $folder_id)->get();
        $marketing_requests = MarketingCategory::orderBy('id', 'desc')->get();
        $diy_templates = DiyTemplateCategory::whereNull('parent_id')->orderBy('order', 'asc')->get();
        
        $folder_id = Folder::where('title', 'XNV34gFFFa')->first()->id;
        $social_media_posts = File::whereBetween('created_at',
        [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ])
        ->where('folder_id', $folder_id)->get();
        
        $today = Carbon::today()->format('Y-m-d');
        $upcoming_events = Event::whereDate('date', '>', $today)->take(5)->get();

        $email_blasts = EmailBlastHomePage::orderBy('order', 'asc')->take(3)->get();
        return view('home-page',
            compact(
                'guides',
                'marketing_requests',
                'diy_templates',
                'social_media_posts',
                'videos',
                'upcoming_events',
                'email_blasts'
            )
        );
    }
}
