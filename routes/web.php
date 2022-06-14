<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamController;

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

// Auth
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::get('/about', [HomeController::class, 'about'])->name('home.about');

// Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

// Route::resource('team', TeamController::class);

// Route::resource('driver', DriverController::class);

// Route::get('/season/{season?}/{team?}/{driver?}', function ($team = null, $driver = null) {
//     if (isset($team)) {
//         if (isset($driver)) {
//             return "You are viewing the driver({$driver}) display";
//         }

//         return "You are viewing the team ({$team}) display";
//     }
//     return "You are viewing the season display";
// });
