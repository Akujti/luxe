<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\Feed\LikeController;
use App\Http\Controllers\Feed\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Feed\CommentController;
use App\Http\Controllers\MarketingTemplateController;
use App\Http\Controllers\ClosingCoordinatorController;


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
Route::get('agreement-agents', [PageController::class, 'agreement_agents']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'feed'], function () {
    Route::get('/', [PostController::class, 'index']);
    Route::post('/', [PostController::class, 'create']);
    Route::put('/', [PostController::class, 'update']);
    Route::delete('/', [PostController::class, 'delete']);

    Route::group(['prefix' => 'comment'], function () {
        Route::post('/', [CommentController::class, 'create']);
        Route::put('/', [CommentController::class, 'update']);
        Route::delete('/', [CommentController::class, 'delete']);
    });

    Route::group(['prefix' => 'like'], function () {
        Route::post('/', [LikeController::class, 'create']);
        Route::delete('/', [LikeController::class, 'delete']);
        Route::post('/comment', [LikeController::class, 'createByComment']);
        Route::delete('/comment', [LikeController::class, 'deleteByComment']);
    });
});