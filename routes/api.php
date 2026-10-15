<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PromoController;
use App\Http\Controllers\Api\StoreController;
use App\Http\Controllers\Api\ProfileController;

// PRODUCT
Route::get('/products', [ProductController::class, 'index']); 
// http://127.0.0.1:8000/api/products

Route::get('/products/{id}', [ProductController::class, 'show']); 
// http://127.0.0.1:8000/api/products/1


// PROMO
Route::get('/promos', [PromoController::class, 'index']); 
// http://127.0.0.1:8000/api/promos

Route::get('/promos/{id}', [PromoController::class, 'show']); 
// http://127.0.0.1:8000/api/promos/1


// STORE
Route::get('/stores', [StoreController::class, 'index']); 
// http://127.0.0.1:8000/api/stores

Route::get('/stores/{id}', [StoreController::class, 'show']); 
// http://127.0.0.1:8000/api/stores/1


// PROFILE
Route::get('/profile-demo', [ProfileController::class, 'show']); 
// http://127.0.0.1:8000/api/profile-demo