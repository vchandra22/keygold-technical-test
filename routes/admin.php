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
    Route::get('edit-product/{product}', [ProductController::class, 'edit'])->name('admin.editProduct');
    Route::put('update-product/{product}', [ProductController::class, 'update'])->name('admin.updateProduct');
    Route::delete('delete-product/{uuid}', [ProductController::class, 'destroy'])->name('admin.deleteProduct');
});
