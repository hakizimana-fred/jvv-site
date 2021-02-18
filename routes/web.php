<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomePageController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/single-service', function () {
    return view('single-service');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
