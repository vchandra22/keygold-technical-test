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

    Route::get('product/{uuid}', [MainIndexController::class, 'show'])->name('frontend.detailProduct');
    Route::get('product-cart', [MainIndexController::class, 'create'])->name('frontend.cartProduct');
});


Route::middleware(['auth'])->group(function () {
    Route::post('/tambah-pesanan/{uuid}', [MainIndexController::class, 'store'])->name('cart.storeProduct');
});
