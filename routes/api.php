<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClosingCoordinatorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\MarketingTemplateController;
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
Route::apiResource('user/events', EventController::class, array("as" => "api"));
Route::apiResource('user/files', FolderController::class, array("as" => "api"));
Route::apiResource('user/guides', GuideController::class, array("as" => "api"));
Route::apiResource('closing-coordinators', ClosingCoordinatorController::class);
Route::apiResource('marketing-canva', MarketingTemplateController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
