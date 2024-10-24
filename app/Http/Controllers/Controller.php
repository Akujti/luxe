<?php

namespace App\Http\Controllers;

use App\Models\EmailBlastHomePage;
use App\Models\Event;
use App\Models\File;
use App\Models\Folder;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\MarketingCanva;
use App\Models\MarketingCategory;
use App\Models\Video\Video;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $videos = Video::orderBy('views', 'desc')->take(10)->get();
        $folder_id = Folder::where('title', 'XNvgkxNbjU')->first()->id;
        $guides = File::where('folder_id', $folder_id)->get();
        $marketing_requests = MarketingCategory::orderBy('id', 'desc')->get();
        $featured_categories = MarketingCanva::with('featured_templates')->where('title', '!=', 'Presentation Booklet')->whereParentId(null)->get();

        $folder_id = Folder::where('title', 'XNV34gFFFa')->first()->id;
        $social_media_posts = File::where('folder_id', $folder_id)->latest()->take(6)->get();

        $unbranded_media_posts_folder_id = Folder::where('title', '5KK08TSWXF')->first()->id;
        $unbranded_media_posts = File::where('folder_id', $unbranded_media_posts_folder_id)->latest()->take(6)->get();

        $today = Carbon::today()->format('Y-m-d');
        $upcoming_events = Event::whereDate('date', '>', $today)->orderBy('date')->take(5)->get();

        $email_blasts = EmailBlastHomePage::orderBy('order', 'asc')->get();

        $marketing_menu_category = LuxeStoreCategory::whereName('Marketing Menu')->first();

        //        $orders = auth()->user()->load(['orders' => function ($q) use ($marketing_menu_category) {
        //            $q->where('created_at', '>=', now()->subDays(31))->whereHas('products', function ($q) use ($marketing_menu_category) {
        //                $q->whereHas('product', function ($q) use ($marketing_menu_category) {
        //                    $q->whereHas('categories', function ($q) use ($marketing_menu_category) {
        //                        $q->where('luxe_store_categories.id', '!=', $marketing_menu_category->id);
        //                    });
        //                });
        //            });
        //        }])->orders->take(3);

        $marketing_orders = auth()->user()->load(['orders' => function ($q) use ($marketing_menu_category) {
            $q->where('created_at', '>=', now()->subDays(31))->whereHas('products', function ($q) use ($marketing_menu_category) {
                $q->whereHas('product', function ($q) use ($marketing_menu_category) {
                    $q->whereHas('categories', function ($q) use ($marketing_menu_category) {
                        $q->where('luxe_store_categories.id', $marketing_menu_category->id);
                    });
                });
            });
        }])->orders->take(3);

        $orders = auth()->user()->load(['orders' => function ($q) {
            $q->where('created_at', '>=', now()->subDays(31));
        }])->orders->take(3);

        $sso_icons = [
            [
                'name' => 'Outlook',
                'icon' => 'outlook.png',
                'url' => 'https://portal.office.com/',
            ],
            [
                'name' => 'Broker Sumo',
                'icon' => 'brokersumo.png',
                'url' => 'https://www.brokersumo.com',
            ],
            [
                'name' => 'DotLoop',
                'icon' => 'dotloop.png',
                'url' => 'https://dotloop.com/',
            ],
            [
                'name' => 'Deposit Link',
                'icon' => 'depositlink.png',
                'url' => 'https://app.depositlink.com/login',
            ],
            [
                'name' => 'kvCORE',
                'icon' => 'kvcore.png',
                'url' => 'https://kvcore.com/',
            ],
            [
                'name' => 'FollowUpBoss',
                'icon' => 'fub.png',
                'url' => 'https://followupboss.com/',
            ],
            [
                'name' => 'Miami Realtors',
                'icon' => 'miamirealtors.png',
                'url' => 'https://sef.clareityiam.net/idp/login',
            ],
            [
                'name' => 'Rela',
                'icon' => 'rela.png',
                'url' => 'https://www.relahq.com/',
            ],
            [
                'name' => 'Giftagram',
                'icon' => 'giftagram.png',
                'url' => 'https://luxeproperties.giftcenter.giftagram.com/',
            ],
            [
                'name' => 'HiFello',
                'icon' => 'fello.png',
                'url' => 'https://connect.hifello.com/auth/login',
            ],
            [
                'name' => 'LUXVT',
                'icon' => 'luxvt.png',
                'url' => 'https://luxvt.com/register?registration_code=luxe',
            ],
            [
                'name' => 'Zillow Showcase',
                'icon' => 'zillow.png',
                'url' => 'https://app.showingtimeplus.com',
            ],
        ];
        return view(
            'home-page',
            compact(
                'guides',
                'marketing_requests',
                'featured_categories',
                'social_media_posts',
                'unbranded_media_posts',
                'unbranded_media_posts_folder_id',
                'videos',
                'upcoming_events',
                'email_blasts',
                'orders',
                'marketing_orders',
                'sso_icons'
            )
        );
    }
}
