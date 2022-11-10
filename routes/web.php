<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionsController;
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

Route::get('language/{locale}', [LanguageController::class, 'edit']);

// Movie
Route::get('/', [MovieController::class, 'index']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'show']);

// Admin
Route::middleware('auth')->group(function () {
	Route::get('admin/movies', [AdminMovieController::class, 'index']);
	Route::get('admin/movies/create', [AdminMovieController::class, 'create']);
	Route::post('admin/movies', [AdminMovieController::class, 'store']);
	Route::get('admin/movies/{movie:slug}/edit', [AdminMovieController::class, 'edit']);
	Route::patch('admin/movies/{movie:id}', [AdminMovieController::class, 'update']);
});

// Session
Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
