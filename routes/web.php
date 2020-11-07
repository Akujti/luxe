<?php

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

Route::get('/', function () {
    return view('pdfBuild');
});
Route::get('/a', function () {
    return view('testPDF');
});

// Route::post('/', [PDFController::class, 'index']);

// Route::get('create-pdf-file','PDFController@index')->name('pdf.index');
Route::post('create-pdf-file', [PDFController::class, 'index'])->name('pdf.store');
Route::post('uploadimage', [PDFController::class, 'uploadimage'])->name('pdf.uploadimage');


// Route::post('create-pdf-file', [PDFController::class, 'index'])->name('pdf.store');
