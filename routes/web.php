<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;

use App\Http\Controllers\Admin\Post\IndexController as IndexAdmin;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
   Route::group(['namespace' => 'Post'], function() {
      Route::get("/post", [IndexAdmin::class, '__invoke'])->name("admin.post.index");
   });
});

Route::get('/posts', IndexController::class)->name('post.index');
Route::get('/posts/create', CreateController::class)->name('post.create');

Route::post('/posts/store', StoreController::class)->name('post.store');
Route::get('/posts/{post}', ShowController::class)->name('post.show');
Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');

Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');












Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
