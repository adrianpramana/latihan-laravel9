<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', fn () => view('welcome')); // Support PHP 7.4

Route::get('/', fn () => view('home'));
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('profile', 'profile');
Route::view('posts/first-post', 'posts.show');
