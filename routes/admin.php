<?php


use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Posts\CommentController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {

    Route::redirect('/', '/admin/posts')->name('admin');

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');

    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');

    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');

    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');

    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');

    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');

    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');

    Route::delete('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');

    Route::resource('posts/{post}/comments', CommentController::class)->only('index', 'show'); //http://example.test/posts/4/comments/456/edit

});
