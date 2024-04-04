<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/test', [TestController::class, 'test'])->name('test');



Route::get('/', [PostController::class, 'index'])->name('home');

Route::group(['prefix' => 'posts'], function () {
    Route::get('', [PostController::class, 'index'])->name('posts.index');
    Route::get('details/{post}', [PostController::class, 'detail'])->name('posts.detail');
    Route::post('store-comment', [PostController::class, 'storeComment'])->name('posts.comment');
    Route::get('create-post', [PostController::class, 'createPost'])->name('posts.create');
    Route::post('store-post', [PostController::class, 'storePost'])->name('posts.store');
    Route::get('edit-post/{id}', [PostController::class, 'editPost'])->name('posts.edit');
    Route::post('update-post/{id}', [PostController::class, 'updatePost'])->name('posts.update');
    Route::get('delete-post/{id}', [PostController::class, 'deletePost'])->name('posts.delete');
});

Route::get('/profile', [UserController::class, 'index'])->name('profile');
