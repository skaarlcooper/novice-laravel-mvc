<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/catalog', [CategoryController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
