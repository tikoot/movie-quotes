<?php

use App\Http\Controllers\AllMovieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('user/dashboard', [LoginController::class, 'store'])->name('user.dashboard');

Route::get('movie/dashboard', [AllMovieController::class, 'create'])->name('movie.dashboard');

Route::get('movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('movie/store', [MovieController::class, 'store'])->name('movie.store');
