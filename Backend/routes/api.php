<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeneralController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('fetch-states', [\App\Http\Controllers\LandingController::class, 'fetchState']);
Route::post('fetch-nutrition-data', [\App\Http\Controllers\LandingController::class, 'fetchNutritionData']);

Route::prefix('v1')->group(function () {
    Route::get('/countries', [GeneralController::class, 'listCountries']);
    Route::get('/eco-regions/{country_id?}', [GeneralController::class, 'listEcoRegions']);
    Route::get('/crops', [GeneralController::class, 'listCrops']);
    Route::post('fetch-nutrition-data', [\App\Http\Controllers\LandingController::class, 'fetchNutritionDataApi']);
});
