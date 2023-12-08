<?php

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

Route::get('/', [App\Http\Controllers\WebController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\WebController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\WebController::class, 'contactUs'])->name('contact-us');



Route::get('/categories', [App\Http\Controllers\WebController::class, 'categories'])->name('categories');
Route::get('/categories/{category}', [App\Http\Controllers\WebController::class, 'category'])->name('category');
Route::get('/trips', [App\Http\Controllers\WebController::class, 'trips'])->name('trips');
Route::get('/trips/{trip}', [App\Http\Controllers\WebController::class, 'trip'])->name('trip');




Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'loginUser'])->name('login');
    Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerUser'])->name('register');
    Route::get('/forgot-password', [App\Http\Controllers\AuthController::class, 'forgotPassword'])->name('forgot-password');
    Route::get('/reset-password', [App\Http\Controllers\AuthController::class, 'resetPassword'])->name('reset-password');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});
