<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);
Route::resource('categories', CategoryController::class);
