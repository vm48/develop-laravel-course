<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Auth;
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
Route::name('start')->group(function () {
    Route::get('/', [StartController::class, 'index']);
    Route::get('/books', [BookController::class, 'index']);
    Route::get('/categories', [CategoryController::class, 'index']);
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
