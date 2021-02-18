<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactsController;
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
Route::get('/about', [AboutPageController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index']);


Route::get('/single-service', function () {
    return view('single-service');
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
