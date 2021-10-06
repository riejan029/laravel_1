<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/users/{user:username}/posts',[UserPostController::class,'index'])->name('users.posts');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);

Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/posts',[PostController::class,'addPost']);
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes',[PostLikeController::class,'like'])->name('posts.likes');
Route::delete('/posts/{post}/likes',[PostLikeController::class,'unlike'])->name('posts.likes');
