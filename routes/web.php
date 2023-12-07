<?php

use App\Models\Category;
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

Route::get('/', function () {
    return view('web.home');
})->name('home');


Route::get('/about-us', function () {
    return view('web.about-us');
})->name('about-us');


Route::get('/contact-us', function () {
    return view('web.contact-us');
})->name('contact-us');



Route::get('/categories', function () {
    $categories = Category::get();
    return view('web.categories', compact('categories'));
})->name('categories');


Route::get('/categories/{slug}', function (Category $slug) {
    return view('web.category', compact('slug'));
})->name('categories');




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
