<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::resource('/articles', \App\Http\Controllers\ArticleController::class)->middleware('admin');

Route::resource('/categories', \App\Http\Controllers\CategoryController::class)->middleware('admin');

Route::resource('/landing', \App\Http\Controllers\LandingController::class);

Route::get('/cart', [\App\Http\Controllers\ArticleController::class, 'cart']);

Route::get('/addToCart/{id}', [ \App\Http\Controllers\ArticleController::class, 'addToCart']);
