<?php

use Illuminate\Support\Facades\Route;

// Class 
use App\Http\Controllers\PostController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\AdminKuisController;


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
Route::resource('kuis', SoalController::class);
Route::resource('admin', AdminKuisController::class);
Route::get('admin/manage-quiz/{id}', [AdminKuisController::class, 'managequiz']);

