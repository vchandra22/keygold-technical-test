<?php

use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\MainIndexController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/', [MainIndexController::class, 'index'])->name('frontend.home');
    Route::get('login', [AuthUserController::class, 'create'])->name('auth.login');
    Route::post('login', [AuthUserController::class, 'store'])->name('auth.authenticate');
    Route::post('logout', [AuthUserController::class, 'destroy'])->name('auth.logout');
    Route::get('register', [RegisterUserController::class, 'create'])->name('auth.register');
    Route::post('register', [RegisterUserController::class, 'store'])->name('auth.sign-up');
});
