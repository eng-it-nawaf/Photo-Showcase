<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
});
Route::view('/', 'home'); 
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::view('/', 'home')->name('home');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

// Route::get('posts/{postId}', [SomeController::class, 'some_method']);
Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 
Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 

