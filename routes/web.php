<?php

use Illuminate\Support\Facades\Route;

// Class 
use App\Http\Controllers\PostController;


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

Route::get('/kuis', function () {
    return view('kuis.kuis', [
        "title" => "Kuis Page"
    ]);
});

Route::resource('posts', PostController::class);

