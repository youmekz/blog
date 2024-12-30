<?php

use App\Http\Controllers\Blog\CommentController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index');

// CURD
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::view('/test', 'test');

Route::prefix('users')->group(function () {
  Route::resource('/user', UserController::class);

  Route::resource('/posts', PostController::class);
  Route::put('/posts/{post}/views', [PostController::class, 'views'])->name('posts.update.views');
  
  Route::resource('/posts/{post}/comments', CommentController::class);
});





