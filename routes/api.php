<?php

use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\CircuitController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\SeasonController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\LoginController;
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

Route::resource('country', CountryController::class);
Route::resource('circuit', CircuitController::class);
Route::resource('driver', DriverController::class)->middleware('auth:sanctum');
Route::resource('team', TeamController::class);
Route::resource('season', SeasonController::class);
