<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    // Route::get('/', [])->name('home')
});

Route::get('/', function () {
    return view('frontend.home.home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
