<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductController::class, 'home'])->name('product.home');
Route::get('/product/tambah', [ProductController::class, 'tambah'])->name('product.tambah');
Route::post('/product/submit', [ProductController::class, 'submit'])->name('product.submit');