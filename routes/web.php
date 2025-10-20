<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;

Route::get('/posts', IndexController::class )->name('post.index');
Route::get('/posts/create', CreateController::class)->name('post.create');

Route::post('/posts/create', StoreController::class)->name('post.store');
Route::get('/posts/{post}', ShowController::class)->name('post.show');
Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');


//Route::get('/posts', [PostController::class, 'index'])->name('post.index');
//Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
//
//Route::post('/posts', [PostController::class, 'store'])->name('post.store');
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
//Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
//Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
//Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');

//
//Route::get('/posts/update', [PostController::class, 'update']);
//Route::get('/posts/delete', [PostController::class, 'delete']);
//Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
//Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);
//
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');







