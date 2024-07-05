<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


Route::get('/menu', function () {
    return view('welcome');
});

Route::post('/add-to-cart', [CartController::class, 'addToCart']);

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::post('/orders', [OrderController::class, 'store']);
