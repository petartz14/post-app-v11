<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::any('/', [HomeController::class, 'index'])->name('home.index');

Route::post('/store-bulk-users', [HomeController::class, 'storeUsers'])->name('home.storeUsers');
Route::post('/store-bulk-posts', [HomeController::class, 'storePosts'])->name('home.storePosts');

Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
