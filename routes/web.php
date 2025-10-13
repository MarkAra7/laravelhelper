<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('store.page');
Route::get('/products/{product}',[ProductController::class, 'show'])->name('show.page');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('delete.page');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('edit.page');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('update.page');;