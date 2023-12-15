<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LocalizationController;

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

Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('/auth/register');
});

Route::get('/', [ProductController::class, 'index']);

Route::get('/collections/best-sellers', [ProductController::class, 'getFeaturedProducts']);

Route::get('/collections/{category}', [ProductController::class, 'getCollection'])->name('getCollection');

Route::get('/faq', function () {
    return view('/others/faq');
});

Route::prefix('{locale}')->group(function () {
    Route::get('/', [LocalizationController::class, 'setLocale'])->name('setLocale');
});

