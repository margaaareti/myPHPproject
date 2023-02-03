<?php


use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;


Route::get('posts', [PostController::class, 'index']) -> name('posts');
Route::get('posts/{post}', [PostController::class, 'store']) -> name('posts.show');
Route::post('posts/{post}/like', [PostController::class, 'store']) -> name('posts.like');

