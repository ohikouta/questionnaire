<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。
use App\Http\Controllers\FormController;
use App\Http\Controllers\GoogleSheetController;
use App\Http\Controllers\GoogleDriveController;
use App\Http\Controllers\ChartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'index']);   


Route::get('/form/create', [FormController::class, 'create'])->name('form.create');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::get('/form/{id}', [FormController::class, 'show'])->name('form.show');

Route::get('/google-sheets', [GoogleSheetController::class, 'index'])->name('google_sheets.index');

Route::get('/chart', [ChartController::class, 'index'])->name('chart.index');