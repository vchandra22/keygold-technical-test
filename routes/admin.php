<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('role:admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('products', [ProductController::class, 'index'])->name('admin.product');
    Route::get('product-list', [ProductController::class, 'tableProduct'])->name('admin.tableProduct');
    Route::get('create-product', [ProductController::class, 'create'])->name('admin.createProduct');
    Route::post('store-product', [ProductController::class, 'store'])->name('admin.storeProduct');
});
