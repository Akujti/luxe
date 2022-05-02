<?php

use Illuminate\Routing\Router;
use App\Models\AppointmentTimeslot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\W9Controller;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AgentEmailController;
use App\Http\Controllers\BrokerSumoController;
use App\Http\Controllers\FormSubmitController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DiyTemplateController;
use App\Http\Controllers\Video\VideoController;
use App\Http\Controllers\TemplateSubmitController;
use App\Http\Controllers\LuxeStore\OrderController;
use App\Http\Controllers\LuxeStore\StoreController;
use App\Http\Controllers\Video\VideoFileController;
use App\Http\Controllers\AddendumTemplateController;
use App\Http\Controllers\MarketingCategoryController;
use App\Http\Controllers\MarketingTemplateController;
use App\Http\Controllers\Video\VideoFolderController;
use App\Http\Controllers\AppointmentAddressController;
use App\Http\Controllers\ClosingCoordinatorController;
use App\Http\Controllers\ListingCoordinatorController;
use App\Http\Controllers\LuxeStore\CategoryController;
use App\Http\Controllers\AppointmentTimeslotController;
use App\Http\Controllers\DiyTemplateCategoryController;
use App\Http\Controllers\LuxeStore\CouponCodeController;
use App\Http\Controllers\WrittenEmailTemplateController;
use App\Http\Controllers\WrittenEmailTemplateItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('general/form/file/download/', [FormController::class, 'file_download'])->name('form.file.download');

Route::view('office-locations', 'office-locations')->middleware('auth');
Route::view('home', 'home-page')->middleware('auth');
Route::redirect('/', 'home');

Route::group(['prefix' => 'store', 'as' => 'luxe_store.', 'middleware' => ['auth']], function () {
    Route::get('/', [StoreController::class, 'index'])->name('index');
    Route::get('/cart', [OrderController::class, 'cartload'])->name('cart');
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::view('/thank-you', 'luxe_store.thank-you')->name('thank_you');
    Route::get('/{category_slug}', [StoreController::class, 'products_index'])->name('products.index');
    Route::get('/product/{product_slug}', [StoreController::class, 'single_product_index'])->name('single_product');
    Route::post('/add-to-cart', [OrderController::class, 'addtocart'])->name('addtocart');
    Route::post('/apply-coupon', [CouponCodeController::class, 'apply_coupon'])->name('apply_coupon');
    Route::post('/order', [OrderController::class, 'create'])->name('order.create');
    Route::put('/order', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/cart', [OrderController::class, 'deleteproductcart'])->name('deletecart');
});

Route::group(['middleware' => ['auth']], function () {
    Route::view('generate-offer', 'generate.web');
    Route::post('generate-offer', [PDFController::class, 'generate_offer'])->name('generate.offer');

    Route::view('agent-agreement', 'agreements.basic.web');
    Route::post('agent-agreement', [FormController::class, 'submitAgreementAgentForm'])->name('agreement.submit');

    Route::get('agreement-agents', [PageController::class, 'agreement_agents']);
    Route::get('agreement-agent/{agent}', [PageController::class, 'agreement_agent'])->name('agreement.agent');
    Route::get('agreement-agent', [PDFController::class, 'agent_agreement'])->name('agreement.agent.download');

    Route::get('suzan-agreement', [PDFController::class, 'suzan_agreement'])->name('agreement.suzan');
    Route::get('steven-agreement', [PDFController::class, 'steven_agreement'])->name('agreement.steven');
    Route::get('gio-agreement', [PDFController::class, 'gio_agreement'])->name('agreement.gio');
    Route::get('albert-agreement', [PDFController::class, 'albert_agreement'])->name('agreement.albert');
    // Resume
    Route::view('resume', 'resume.web');
    Route::post('resume', [PDFController::class, 'resume'])->name('resume');

    // Door Hangers
    Route::view('door-hanger-template-1', 'door-hangers.template1.web');
    Route::post('door-hanger-template-1', [PDFController::class, 'door_hanger_template_1'])->name('door-hanger-template-1');

    Route::view('door-hanger-template-3', 'door-hangers.template3.web');
    Route::post('door-hanger-template-3', [PDFController::class, 'door_hanger_template_3'])->name('door-hanger-template-3');

    Route::view('door-hanger-template-4', 'door-hangers.template4.web');
    Route::post('door-hanger-template-4', [PDFController::class, 'door_hanger_template_4'])->name('door-hanger-template-4');

    //Flyers
    Route::view('flyer-template-6', 'flyers.template6.web');
    Route::post('flyer-template-6', [PDFController::class, 'flyer_template_6'])->name('flyer-template-6');

    Route::view('flyer-template-5', 'flyers.template5.web');
    Route::post('flyer-template-5', [PDFController::class, 'flyer_template_5'])->name('flyer-template-5');

    Route::view('flyer-template-4', 'flyers.template4.web');
    Route::post('flyer-template-4', [PDFController::class, 'flyer_template_4'])->name('flyer-template-4');


    Route::view('flyer-template-3', 'flyers.template3.web');
    Route::post('flyer-template-3', [PDFController::class, 'flyer_template_3'])->name('flyer-template-3');

    Route::view('flyer-template-2', 'flyers.template2.web');
    Route::post('flyer-template-2', [PDFController::class, 'flyer_template_2'])->name('flyer-template-2');

    Route::view('flyer-template-1', 'flyers.template1.web');
    Route::post('flyer-template-1', [PDFController::class, 'flyer_template_1'])->name('flyer-template-1');

    //Emails
    Route::view('email-template-1', 'emails.template1.web');
    Route::post('email-template-1', [PDFController::class, 'email_template_1'])->name('email-template-1');

    Route::view('email-template-2', 'emails.template2.web');
    Route::post('email-template-2', [PDFController::class, 'email_template_2'])->name('email-template-2');

    Route::view('email-template-3', 'emails.template3.web');
    Route::post('email-template-3', [PDFController::class, 'email_template_3'])->name('email-template-3');

    Route::view('email-template-4', 'emails.template4.web');
    Route::post('email-template-4', [PDFController::class, 'email_template_4'])->name('email-template-4');

    //Themes
    Route::get('/just-listed-story', function () {
        return view('themes.just-listed-story.just-listed-story-web');
    });

    Route::post('create-theme-just-listed-story', [PDFController::class, 'theme_just_listed_story'])->name('theme-just-listed-story');

    Route::get('/coming-soon', function () {
        return view('themes.coming-soon.coming-soon-web');
    });
    Route::post('create-theme-coming-soon', [PDFController::class, 'theme_coming_soon'])->name('theme-coming-soon');

    Route::get('/just-closed-story', function () {
        return view('themes.just-closed-story.just-closed-story-web');
    });
    Route::post('create-theme-just-closed-story', [PDFController::class, 'theme_just_closed_story'])->name('theme-just-closed-story');

    Route::get('/tbt-story', function () {
        return view('themes.tbt-story.tbt-story-web');
    });
    Route::post('create-theme-tbt-story', [PDFController::class, 'theme_tbt_story'])->name('theme-tbt-story');

    Route::get('/joined-luxe-story', function () {
        return view('themes.joined-luxe-story.joined-luxe-story-web');
    });
    Route::post('create-theme-joined-luxe-story', [PDFController::class, 'theme_just_joined_story'])->name('theme-joined-luxe-story');

    //New Theme
    Route::get('/open-house-theme', function () {
        return view('themes.open-house.open-house-web');
    });
    Route::post('create-theme-open-house', [PDFController::class, 'theme_open_house'])->name('theme-open-house');

    ////

    Route::get('/joined-luxe', function () {
        return view('themes.joined-luxe.joined-luxe-web');
    });
    Route::post('create-theme-joined-luxe', [PDFController::class, 'theme_just_joined'])->name('theme-joined-luxe');

    Route::get('/just-closed', function () {
        return view('themes.just-closed.just-closed-web');
    });
    Route::post('create-theme-just-closed', [PDFController::class, 'theme_just_closed'])->name('theme-just-closed');

    Route::get('/just-listed', function () {
        return view('themes.just-listed.just-listed-web');
    });
    Route::post('create-theme-just-listed', [PDFController::class, 'theme_just_listed'])->name('theme-just-listed');

    Route::get('/tbt', function () {
        return view('themes.tbt.tbt-web');
    });
    Route::post('create-theme-tbt', [PDFController::class, 'theme_tbt'])->name('theme-tbt');
    ////

    Route::get('/just-sold-story', function () {
        return view('themes.just-sold-story.just-sold-story-web');
    });
    Route::get('/just-sold', function () {
        return view('themes.just-sold.just-sold-web');
    });

    Route::get('/for-sale', function () {
        return view('themes.for-sale.for-sale-web');
    });
    Route::get('/for-sale-story', function () {
        return view('themes.for-sale-story.for-sale-story-web');
    });

    Route::post('create-theme-for-sale', [PDFController::class, 'theme_for_sale'])->name('theme-for-sale');
    Route::post('create-theme-for-sale-story', [PDFController::class, 'theme_for_sale_story'])->name('theme-for-sale-story');

    Route::post('create-theme-just-sold', [PDFController::class, 'theme_just_sold'])->name('theme-just-sold');
    Route::post('create-theme-just-sold-story', [PDFController::class, 'theme_just_sold_story'])->name('theme-just-sold-story');
    //End


    Route::get('/single-property', function () {
        return view('single-property-web');
    });

    Route::get('/fsbo-booklet', function () {
        return view('fsbo-booklet-web');
    });

    Route::get('/home-selling', function () {
        return view('pdfBuild');
    });

    Route::get('/home-buying', function () {
        return view('home-buying-guide-web');
    });

    Route::view('/home-didnt-sell', 'home-didnt-sell-web');

    Route::post('uploadimage', [PDFController::class, 'uploadimage'])->name('pdf.uploadimage');

    Route::post('create-pdf-file-home', [PDFController::class, 'index'])->name('pdf.store');
    Route::post('create-pdf-file-fsbo', [PDFController::class, 'fsbo_index'])->name('pdf.fsbo.store');
    Route::post('create-pdf-file-single', [PDFController::class, 'single_property'])->name('pdf.single.property');
    Route::post('create-pdf-file-home-buying', [PDFController::class, 'home_buying'])->name('pdf.home.buying');
    Route::post('home-didnt-sell', [PDFController::class, 'home_didnt_sell'])->name('pdf.home.didnt.sell');

    Route::resource('appointments', AppointmentController::class);
    Route::get('appointment-addresses/all', [AppointmentAddressController::class, 'all']);
    Route::get('appointment-timeslots/all', [AppointmentTimeslotController::class, 'all']);
    Route::get('test', [TestController::class, 'index']);

    Route::resource('listing-coordinators', ListingCoordinatorController::class);
    Route::post('listing-coordinators/{id}/change-status', [ListingCoordinatorController::class, 'change_status'])->name('listing_coordinator.change_status');


    Route::resource('form', FormController::class);

    Route::get('bookings/{room}', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('bookings', [BookingController::class, 'selectRoom'])->name('bookings.rooms');

    Route::post('bookings', [BookingController::class, 'store'])->middleware('auth')->name('bookings.store');


    Route::get('marketing-home', [MarketingCategoryController::class, 'index'])->name('marketing.requests');
    Route::get('marketing/{marketingCategory}', [MarketingCategoryController::class, 'show'])->name('marketing.request');
    Route::get('marketing/{marketingCategory}/{template}', [MarketingCategoryController::class, 'template'])->name('marketing.template');

    Route::post('marketing/{marketingCategory}/{template}/email/send', [MarketingCategoryController::class, 'sendEmail'])->name('marketing.email');
    Route::post('general/form/send', [FormController::class, 'general_form_post'])->name('general.email.post');

    Route::get('general/form/other/closing-coordinators-agents', [ClosingCoordinatorController::class, 'index']);
    Route::post('general/form/other/closing-coordinators-agents', [ClosingCoordinatorController::class, 'change_status'])->name('change_status');
    Route::get('general/form/other/closing-coordinators/{id}', [ClosingCoordinatorController::class, 'agent'])->name('closing-coordinator');
    Route::get('general/form/{folder}/{form}', [FormController::class, 'general_form_index'])->name('general.email.index');
    Route::get('loginTest', [UserController::class, 'login']);
});


Route::view('/', 'index');

Auth::routes(['register' => false]);

Route::group(
    ['prefix' => 'user', 'middleware' => ['auth']],
    function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/links', [PageController::class, 'links'])->name('links');
        // Route::get('/videos', [PageController::class, 'videos'])->name('videos');
        Route::get('/videos', [VideoFolderController::class, 'index'])->name('videos');
        Route::get('/videos/{video_id}', [VideoFolderController::class, 'show'])->name('video.single_video');
        Route::post('/videos/review', [VideoFolderController::class, 'create_review'])->name('video.create_review');
        Route::post('/videos/review/comment', [VideoFolderController::class, 'create_comment'])->name('video.create_comment');
        Route::get('/videos/{name}', [PageController::class, 'video_folder'])->name('video.folder');
        Route::get('/events/my', [EventController::class, 'my_events'])->name('my.events');
        Route::resource('events', EventController::class);
        //        Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');

        Route::resource('files', FolderController::class);
        Route::delete('folder-destory/{id}', [FolderController::class, 'folder_destroy'])->name('folder.destroy');
        Route::put('folder-update', [FolderController::class, 'folder_update'])->name('folder.update');
        Route::delete('file-destory/{id}', [FolderController::class, 'file_destroy'])->name('file.destroy');
        Route::post('files/open-house-directory', [FolderController::class, 'create_directory'])->name('files.open-house.directory');
        Route::resource('guides', GuideController::class);

        Route::get('written-email-templates', [WrittenEmailTemplateController::class, 'index'])->name('written-email-templates');
        Route::post('written-email-templates', [WrittenEmailTemplateController::class, 'store'])->name('written-email-templates.store');
        Route::get('written-email-templates/{writtenEmailTemplate}', [WrittenEmailTemplateController::class, 'show'])->name('written-email-templates.show');

        Route::resource('addendum-templates', AddendumTemplateController::class)->except(['show']);
        Route::get('addendum-templates/{writtenEmailTemplate}', [WrittenEmailTemplateController::class, 'show'])->name('addendum-templates.show');

        Route::get('/search', [VideoController::class, 'search'])->name('user.search');
        // W-9
        Route::view('w-9', 'w-9.web');
        Route::post('w-9', [W9Controller::class, 'store'])->name('w-9');
        Route::get('w-9/download/{id}', [W9Controller::class, 'download'])->name('w-9.download');

        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::get('/', [UserController::class, 'my_profile'])->name('my_profile');
            Route::put('/', [UserController::class, 'update_profile'])->name('update');
        });

        Route::get('/agent-list', [UserController::class, 'agent_list'])->name('agent_list');

        Route::get('diy-templates', [DiyTemplateCategoryController::class, 'agent_index'])->name('user.diy-templates');
        Route::get('diy-templates/{diyTemplateCategory}', [DiyTemplateCategoryController::class, 'agent_show'])->name('user.diy-templates.show');
        Route::get('/orders', [OrderController::class, 'my_orders'])->name('my_orders');
        Route::get('/orders/{id}', [OrderController::class, 'show_agent'])->name('my_orders.show');
    }
);

Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::post('general/form/other/closing-coordinators-agents', [ClosingCoordinatorController::class, 'change_status'])->name('change_status');
        Route::resource('listing-coordinators', ListingCoordinatorController::class);
        Route::post('listing-coordinators/{id}/change-status', [ListingCoordinatorController::class, 'change_status'])->name('listing_coordinator.change_status');
    }
);

Route::group(
    ['middleware' => ['auth', 'admin']],
    function () {
        Route::get('marketing/{marketingCategory}/{template}/fields', [MarketingCategoryController::class, 'fields'])->name('template.fields');
        Route::post('marketing/{marketingCategory}/{template}/fields', [MarketingCategoryController::class, 'addField'])->name('field.store');
        Route::put('marketing/template/fields/update/{field}', [MarketingCategoryController::class, 'updateField'])->name('field.update');
        Route::delete('marketing/template/fields/update/{field}', [MarketingCategoryController::class, 'deleteField'])->name('field.delete');

        Route::post('marketing/{marketingCategory}', [MarketingCategoryController::class, 'addTemplate'])->name('template.store');
        Route::put('marketing/{marketingCategory}/{template}', [MarketingCategoryController::class, 'updateTemplate'])->name('template.update');
        Route::delete('marketing/{marketingCategory}/{template}', [MarketingCategoryController::class, 'deleteTemplate'])->name('template.delete');

        Route::delete('bookings/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');

        Route::post('written-email-templates/{writtenEmailTemplate}', [WrittenEmailTemplateItemController::class, 'store'])->name('written-email-templates.item.store');
        Route::delete('written-email-template-item/delete/item', [WrittenEmailTemplateItemController::class, 'destroy'])->name('written-email-templates.item.delete');
        Route::put('written-email-template-item/update/item', [WrittenEmailTemplateItemController::class, 'update'])->name('written-email-templates.item.update');


        Route::post('get-csv', [FormSubmitController::class, 'getCsv'])->name('getCsv');
        Route::delete('deleteSubmissions', [FormSubmitController::class, 'deleteSubmissions'])->name('deleteSubmissions');

        Route::resource('appointment-addresses', AppointmentAddressController::class);
        Route::resource('agent-emails', AgentEmailController::class);

        Route::get('view-profile/{id}', [UserController::class, 'view_profile']);
        Route::get('agent-profile/{id}', [UserController::class, 'agent_profile']);

        Route::post('create-note', [UserController::class, 'create_note'])->name('create_note');
        Route::get('/notes/{id}', [UserController::class, 'view_notes'])->name('notes');
    }
);



// Canva Marketing

Route::group(['prefix' => 'marketing-canva', 'as' => 'canva.', 'middleware' => ['auth']], function () {
    Route::get('/', [MarketingTemplateController::class, 'index'])->name('marketing.requests');
    Route::get('/{marketingCanva}', [MarketingTemplateController::class, 'show'])->name('marketing.request');
    Route::get('/{marketingCanva}/{template}', [MarketingTemplateController::class, 'template'])->name('marketing.template');
});

// End Canva Marketing

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('marketing-requests', TemplateSubmitController::class);
    Route::resource('form-submit', FormSubmitController::class);

    Route::get('broker-sumo/updateAgents', [BrokerSumoController::class, 'updateAgentsTransactions']);
    Route::resource('broker-sumo', BrokerSumoController::class);

    Route::group(['prefix' => 'forms', 'as' => 'forms.'], function () {
        Route::get('/', [AdminController::class, 'forms'])->name('index');
        Route::put('/', [AdminController::class, 'update_form'])->name('update');
    });

    Route::resource('diy-categories', DiyTemplateCategoryController::class);
    Route::resource('diy-templates', DiyTemplateController::class);

    Route::group(['prefix' => 'marketing-canva', 'as' => 'canva.'], function () {
        Route::get('/', [MarketingTemplateController::class, 'index_admin'])->name('marketing.index_admin');
        Route::get('/{id}', [MarketingTemplateController::class, 'admin_categories'])->name('marketing.show');
        // Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        //     Route::get('/{id}', [MarketingTemplateController::class, 'admin_categories'])->name('index');
        //     Route::post('/', [MarketingTemplateController::class, 'create_category'])->name('create');
        //     Route::put('/', [MarketingTemplateController::class, 'update_category'])->name('update');
        //     Route::delete('/', [MarketingTemplateController::class, 'destroy_category'])->name('delete');


        // });
        Route::group(['prefix' => 'templates', 'as' => 'templates.'], function () {
            Route::get('/{marketing_id}/categories/{category_id}', [MarketingTemplateController::class, 'admin_templates'])->name('index');
            Route::post('/', [MarketingTemplateController::class, 'create_template'])->name('create');
            Route::put('/', [MarketingTemplateController::class, 'update_template'])->name('update');
            Route::delete('/', [MarketingTemplateController::class, 'destroy_template'])->name('delete');
        });
        Route::post('/', [MarketingTemplateController::class, 'create'])->name('marketing.create');
        Route::put('/', [MarketingTemplateController::class, 'update'])->name('marketing.update');
        Route::delete('/', [MarketingTemplateController::class, 'destroy'])->name('marketing.delete');
    });

    Route::group(['prefix' => 'store', 'as' => 'luxe_store.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/', [CategoryController::class, 'create'])->name('create');
        Route::put('/', [CategoryController::class, 'update'])->name('update');
        Route::delete('/', [CategoryController::class, 'delete'])->name('delete');

        Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
            Route::get('/', [StoreController::class, 'admin_products'])->name('index');
            Route::get('/new-product/{id?}', [StoreController::class, 'new_product'])->name('new_product');
            Route::post('/', [StoreController::class, 'create'])->name('create');
            Route::put('/', [StoreController::class, 'update'])->name('update');
            Route::delete('/', [StoreController::class, 'delete'])->name('delete');
            Route::delete('/image', [StoreController::class, 'delete_image_product'])->name('delete_image_product');
        });

        Route::group(['prefix' => 'coupons', 'as' => 'coupons.'], function () {
            Route::get('/', [CouponCodeController::class, 'index'])->name('index');
            Route::post('/', [CouponCodeController::class, 'create'])->name('create');
            Route::put('/', [CouponCodeController::class, 'update'])->name('update');
            Route::delete('/', [CouponCodeController::class, 'delete'])->name('delete');
        });
    });

    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
        Route::get('/', [OrderController::class, 'admin_index'])->name('index');
        Route::get('/{id}', [OrderController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'admin_index'])->name('index');
        Route::view('/create', 'admin.users.form.create')->name('create_form');
        Route::get('/update/{id}', [UserController::class, 'update_form'])->name('update_form');
        Route::get('/search', [UserController::class, 'search'])->name('search');
        Route::post('/', [UserController::class, 'create'])->name('create');
        Route::put('/', [UserController::class, 'update'])->name('update');
        Route::delete('/', [UserController::class, 'delete'])->name('delete');
    });


    // Admin Videos
    Route::group(['prefix' => 'videos', 'as' => 'videos.'], function () {
        Route::get('/', [VideoFolderController::class, 'admin_index'])->name('index');
        Route::post('/', [VideoFolderController::class, 'create'])->name('create');
        Route::put('/', [VideoFolderController::class, 'update'])->name('update');
        Route::delete('/', [VideoFolderController::class, 'delete'])->name('delete');

        Route::group(['prefix' => 'video', 'as' => 'video.'], function () {
            Route::post('/', [VideoController::class, 'create'])->name('create');
            Route::put('/', [VideoController::class, 'update'])->name('update');
            Route::delete('/', [VideoController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'file', 'as' => 'file.'], function () {
            Route::post('/', [VideoFileController::class, 'create'])->name('create');
            Route::put('/', [VideoFileController::class, 'update'])->name('update');
            Route::delete('/', [VideoFileController::class, 'delete'])->name('delete');
        });
    });

    Route::get('update-role', [UserController::class, 'update_role']);
    Route::get('update-videos', [VideoController::class, 'update_videos']);
});
