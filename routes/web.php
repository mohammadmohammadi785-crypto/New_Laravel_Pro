<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SinfController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/product/create', 'Product.create');
Route::post('/product/add', [ProductController::class, 'create']);
Route::get('product', [ProductController::class, 'index']);

Route::get("Sinf", [SinfController::class, "index"]);
Route::get("Student", [StudentController::class, "index"]);

Route::post("create-post",[PostController::class, "create"]);
Route::get("Post",[PostController::class, "index"]);
Route::view("Post/create", 'Post.create');
Route::put('Post/update/{id}', [PostController::class, 'update']);
Route::get('Post/edit/{id}', [PostController::class, 'edit']);