<?php

//use App\Http\Controllers\Post\CreateController;
//use App\Http\Controllers\Post\EditController;
//use App\Http\Controllers\Post\IndexController;
//use App\Http\Controllers\Post\ShowController;
//use App\Http\Controllers\Post\StoreController;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//Route::middleware('auth:api')->get('user', [AuthController::class, 'user']);
//Route::middleware('auth:api')->get('posts',  IndexController::class);

Route::group(['middleware' => 'auth:api', 'namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('user', [AuthController::class, 'user']);

    Route::get('posts', IndexController::class);
    Route::get('posts/create', CreateController::class);
    Route::post('posts', StoreController::class);
    Route::get('posts/{post}', ShowController::class);
    Route::get('/posts/{post}/edit', EditController::class);
    Route::patch('posts/{post}', UpdateController::class);
    Route::delete('posts/{post}', DestroyController::class);
});

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

//Route::post('/posts', IndexController::class)->middleware('auth:sanctum');
