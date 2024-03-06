<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index' ])->name('home');


Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index' ])->name('posts.index');
Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show' ])->name('posts.show');


Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/register_proccess', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_proccess');
