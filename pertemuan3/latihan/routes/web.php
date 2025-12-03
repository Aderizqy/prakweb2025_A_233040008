<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route halaman utama
Route::view('/', 'home'); 

// Route halaman statis
Route::view('/about', 'about');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');

// Route controller
Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
