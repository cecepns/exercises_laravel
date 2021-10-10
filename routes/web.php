<?php

use Illuminate\Support\Facades\Route;

// Class 
use App\Http\Controllers\PostController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\AdminKuisController;
use App\Http\Controllers\BankSoalController;


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
    return view('welcome ', [
        "title" => "Home Page",
        "nama" => "Cecep GansKuy"
    ]);
});




Route::resource('posts', PostController::class);
Route::resource('kuis', KuisController::class);
Route::get('search', [KuisController::class, 'searchkuis'])->name('search');


Route::resource('admin', AdminKuisController::class);
Route::resource('manage-soal', BankSoalController::class);


Route::get('admin/manage-quiz/{id}', [AdminKuisController::class, 'managequiz']);
Route::get('admin/manage-quiz/destroy/{id}', 
[AdminKuisController::class, 'destroysoalquiz']);


Route::get('admin/manage-soal/create/{id}', [BankSoalController::class, 'create']);
Route::get('admin/manage-soal/{id}', [BankSoalController::class, 'index']);