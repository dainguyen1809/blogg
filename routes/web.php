<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/test', [TestController::class, 'test'])->name('test');



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/details/{post}', [PostController::class, 'detail'])->name('posts.detail');
Route::post('/posts/store-comment', [PostController::class, 'storeComment'])->name('posts.comment');
