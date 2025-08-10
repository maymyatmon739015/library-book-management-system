<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\MemberController;

Route::view('/register', 'auth.register')->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::view('/login', 'auth.login')->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('books', BookController::class);
    Route::resource('members', MemberController::class);
    Route::resource('borrowings', BorrowingController::class)->except(['show', 'edit', 'update', 'destroy']);
    Route::post('borrowings/{id}/return', [BorrowingController::class, 'returnBook'])->name('borrowings.return');
});
