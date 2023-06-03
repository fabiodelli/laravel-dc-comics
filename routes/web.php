<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\PageController;
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



Route::get('/',[PageController::class,'home'])->name('home');

Route::get('/movies',[PageController::class,'movies'])->name('movies');

Route::get('/news',[PageController::class,'news'])->name('news');

Route::get('/admin/products/index',[ProductController::class,'index'])->name('admin');

Route::resource('products', \App\Http\Controllers\admin\ProductController::class, ['as' => 'admin']);




