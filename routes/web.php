<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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
// Door Hangers
Route::view('door-hanger-template-1', 'door-hangers.template1.web');
Route::post('door-hanger-template-1', [PDFController::class, 'door_hanger_template_1'])->name('door-hanger-template-1');

//Flyers
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

Route::get('/', function () {
    return view('single-property-web');
});

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/links', [PageController::class, 'links'])->name('links');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/calendar', [PageController::class, 'calendar'])->name('calendar');
