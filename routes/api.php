<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppointmentTimeslotController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClosingCoordinatorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\MarketingTemplateController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Video\VideoFolderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('formSubmit', [FormController::class, 'general_form_post']);
Route::post('login', [LoginController::class, 'login']);
Route::get('appointment-addresses', [AppointmentController::class, 'getAddresses']);
Route::get('appointment-timeslots/all', [AppointmentTimeslotController::class, 'all']);
Route::post('store-appointment', [AppointmentController::class, 'store']);
Route::apiResource('user/events', EventController::class, array("as" => "api"));
Route::apiResource('user/files', FolderController::class, array("as" => "api"));
Route::apiResource('user/guides', GuideController::class, array("as" => "api"));
Route::apiResource('closing-coordinators', ClosingCoordinatorController::class);
Route::apiResource('marketing-canva', MarketingTemplateController::class);
Route::get('agreement-agents', [PageController::class, 'agreement_agents']);
Route::get('conference-rooms', [BookingController::class, 'selectRoom']);
Route::get('conference-rooms/{room_id}', [BookingController::class, 'index']);
Route::post('bookings', [BookingController::class, 'store'])->middleware('auth:sanctum');
Route::get('videos', [VideoFolderController::class, 'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
