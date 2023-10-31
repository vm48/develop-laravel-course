<?php

use App\Helpers\Telegram;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
    Route::get('/', function (Telegram $telegram) {
        $sendMessage = $telegram->sendMessage(env('REPORT_TELEGRAM_ID'),
            'test');

        $sendMessage = json_decode($sendMessage);
        $http        = $telegram->sendDocument(env('REPORT_TELEGRAM_ID'),
            'books1.xlsx', $sendMessage->result->message_id);
        //        dd(Storage::get('/books1.xlsx'));
        dd($http->body());
    });
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
