<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('', [UserController::class, 'index']);

Route::controller(PostController::class)->prefix("user")->group(function () {
    Route::redirect('/', '/user/posts');

    Route::get('/login', 'login');
    Route::get('/registration', 'registration');
});



Route::controller(PostController::class)->prefix("user/posts")->group(function () {
    Route::get('', 'index')->name("user.posts.index");
    Route::post('', 'store')->name("user.posts.store");

    Route::get('/create', 'create')->name("user.posts.create");
    Route::get('{post}', 'show')->name("user.posts.show");
    Route::get('{post}/edit', 'edit')->name("user.posts.edit");
    Route::put('{post}', 'update')->name("user.posts.update");
    Route::delete('{post}', 'delete')->name("user.posts.delete");

    Route::put('{post}/like', 'like')->name("user.posts.like");
});

//Route::controller(UserController::class)->prefix("user")->group(function () {
//    Route::get('userProfile', 'show');
//    Route::get('posts', 'show');
//});
