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



Route::get('/',[PageController::class,'index'])->name('home');

Route::get('/movies',[PageController::class,'movies'])->name('movies');

Route::get('/news',[PageController::class,'news'])->name('news');
/*
Route::get('/products/index', [App\Http\Controllers\admin\ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [App\Http\Controllers\admin\ProductController::class, 'create'])->name('products.create');

Route::get('/products/show', [App\Http\Controllers\admin\ProductController::class, 'show'])->name('products.show');

Route::get('/products/edit', [App\Http\Controllers\admin\ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{product}', [App\Http\Controllers\admin\ProductController::class, 'update'])->name('products.update');
*/
Route::resource('products', \App\Http\Controllers\admin\ProductController::class, ['as' => 'admin']);




