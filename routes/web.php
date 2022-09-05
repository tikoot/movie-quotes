<?php

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

Route::view('/', 'index')->name('index');
Route::view('users/login', 'user.login')->name('users.login');
Route::view('movies/create', 'movie.create-movie')->name('movies.create');
Route::view('quotes/create', 'quote.create-quote')->name('quotes.create');

Route::post('users/dashboard', [LoginController::class, 'dashboard'])->name('users.dashboard');
Route::get('users/logout', [LoginController::class, 'logout'])->name('users.logout');

Route::get('movies/show', [MovieController::class, 'show'])->name('movies.show');
Route::post('movies/store', [MovieController::class, 'store'])->name('movies.store');
Route::get('movies/{movie}', [MovieController::class, 'index'])->name('movies.index');
Route::get('movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::patch('movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');

Route::get('quotes/show', [QuoteController::class, 'show'])->name('quotes.show');
Route::post('quotes/store', [QuoteController::class, 'store'])->name('quotes.store');
Route::get('quotess/{quote}/edit', [QuoteController::class, 'edit'])->name('quotes.edit');
Route::patch('quotes/{quote}', [QuoteController::class, 'update'])->name('quotes.update');
Route::delete('quotes/{quote}', [QuoteController::class, 'destroy'])->name('quotes.destroy');
