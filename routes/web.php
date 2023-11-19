<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'home'])->name('landing.index');
Route::get('/about', [LandingController::class, 'home'])->name('landing.about');
Route::get('/contact', [LandingController::class, 'home'])->name('landing.contact');
