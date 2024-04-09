<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login')->middleware('checkAuth');
Route::post('admin/login', [AdminController::class, 'checkLogin'])->name('admin.check.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/test', [TestController::class, 'test'])->name('test');



Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/contact', [PostController::class, 'contactPage'])->name('pages.contact');
Route::get('/about', [PostController::class, 'aboutPage'])->name('pages.about');

Route::group(['prefix' => 'posts'], function () {
    Route::get('', [PostController::class, 'index'])->name('posts.index');
    Route::get('details/{post}', [PostController::class, 'detail'])->name('posts.detail');
    Route::post('store-comment', [PostController::class, 'storeComment'])->name('posts.comment');
    Route::get('create-post', [PostController::class, 'createPost'])->name('posts.create');
    Route::post('store-post', [PostController::class, 'storePost'])->name('posts.store');
    Route::get('edit-post/{id}', [PostController::class, 'editPost'])->name('posts.edit');
    Route::post('update-post/{id}', [PostController::class, 'updatePost'])->name('posts.update');
    Route::get('delete-post/{id}', [PostController::class, 'deletePost'])->name('posts.delete');
    Route::post('search', [PostController::class, 'search'])->name('posts.search');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/{category}', [CategoryController::class, 'category'])->name('category');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/profile/{id}', [UserController::class, 'index'])->name('user.profile');
    Route::get('/author/{id}', [UserController::class, 'profile'])->name('user.author');
    Route::get('/edit-profile/{id}', [UserController::class, 'eidtProfile'])->name('user.edit');
    Route::post('/update-profile/{id}', [UserController::class, 'updateProfile'])->name('user.update');

});
