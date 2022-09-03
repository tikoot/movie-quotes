<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
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
Route::post('dashboard', [LoginController::class, 'store'])->name('user.dashboard');

Route::get('movies/show', [MovieController::class, 'show'])->name('movie.show');
Route::get('movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('movie/store', [MovieController::class, 'store'])->name('movie.store');
Route::get('movies/{movie}', [MovieController::class, 'index'])->name('movie.index');
Route::get('movies/{movie}/edit', [MovieController::class, 'edit'])->name('movie.edit');
Route::patch('movies/{movie}', [MovieController::class, 'update'])->name('movie.update');

Route::get('quotes/show', [QuoteController::class, 'show'])->name('quote.show');
Route::get('quote/create', [QuoteController::class, 'create'])->name('quote.create');
Route::post('quote/store', [QuoteController::class, 'store'])->name('quote.store');
Route::get('quotes/{quote}/edit', [QuoteController::class, 'edit'])->name('quote.edit');
Route::patch('quotes/{quote}', [QuoteController::class, 'update'])->name('quote.update');
Route::delete('quotes/{quote}', [QuoteController::class, 'destroy'])->name('quote.destroy');
