<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('sales', SaleController::class);

Route::get('products/compare', [ProductController::class, 'compare'])->name('products.compare');
