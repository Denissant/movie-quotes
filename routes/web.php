<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;
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

Route::get('language/{locale}', [LanguageController::class, 'edit'])->name('language');

// Movie
Route::name('movie.')->group(function () {
	Route::get('/', [MovieController::class, 'index'])->name('index');
	Route::get('/movies/{movie:slug}', [MovieController::class, 'show'])->name('show');
});

// Admin
Route::group(['middleware' => 'auth', 'as' => 'admin.', 'prefix' => 'admin'], function () {
	Route::resource('movie', AdminMovieController::class)->except('show', 'delete');
	Route::resource('movie.quote', AdminQuoteController::class)->except('show', 'delete');
});

// Session
Route::controller(AuthController::class)->group(function () {
	Route::get('login', 'login')->name('login')->middleware('guest');
	Route::post('login', 'authenticate')->middleware('guest');
	Route::post('logout', 'logout')->name('logout')->middleware('auth');
});
