<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SinfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/product/create', 'Product.create');
Route::post('/product/add', [ProductController::class, 'create']);
Route::get('product', [ProductController::class, 'index']);

Route::get("Sinf", [SinfController::class, "index"]);