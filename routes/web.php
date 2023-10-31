<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
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
    Route::get('/books/export', [BookController::class, 'booksExport'])
        ->name('.books.export');
    Route::get('/categories', [CategoryController::class, 'index']);
});

Route::middleware('auth')->prefix('admin')->name('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('users', [UserController::class, 'index'])->name('.users');
    Route::get('users/create', [UserController::class, 'create'])
        ->name('.users.create');
    Route::post('users/create', [UserController::class, 'store'])
        ->name('.users.store');
    Route::get('users/{id}/edit/', [UserController::class, 'edit'])
        ->name('.users.edit');
    Route::post('users/{id}/update/', [UserController::class, 'update'])
        ->name('.users.update');
    Route::delete('users/{id}/destroy/', [UserController::class, 'destroy'])
        ->name('.users.destroy');
    /*Route::name('.user')->resource('users', UserController::class);*/
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
