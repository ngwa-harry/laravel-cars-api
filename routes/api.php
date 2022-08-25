<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\TransmissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('cars', CarController::class);
Route::apiResource('manufacturers', ManufacturerController::class);
Route::resource('manufacturers.cars', CarController::class)->only('index');

Route::apiResource('transmissions', TransmissionController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
