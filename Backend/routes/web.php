<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/special-ed', [\App\Http\Controllers\LandingController::class, 'special']);
Route::get('/explore', [\App\Http\Controllers\LandingController::class, 'explore']);
Route::get('/data-centre', [\App\Http\Controllers\LandingController::class, 'dataCentre']);
Route::get('/about', [\App\Http\Controllers\LandingController::class, 'about']);
Route::get('/gallery', [\App\Http\Controllers\LandingController::class, 'gallery']);

