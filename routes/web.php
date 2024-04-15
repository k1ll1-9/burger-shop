<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
