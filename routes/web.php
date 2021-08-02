<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
	return view('frontend.index');
});

//******ADMIN ******/
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

//******BACKEND USER ******/

Route::get('/admin/user', [UserController::class, 'index']);
Route::get('/admin/user/update/{id}', [UserController::class, 'update_form']);
Route::post('/admin/user/update', [UserController::class, 'update']);
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete']);

//******BACKEND PRODUCT ******/
Route::get('/product', [ProductController::class, 'product_frontend_index']);
Route::get('/product/detail/{id}', [ProductController::class, 'product_frontend_detail']);

Route::get('/admin/product', [ProductController::class, 'index'])->middleware('auth');
Route::get('/admin/product/create_form', [ProductController::class, 'create_form'])->middleware('auth');
Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->middleware('auth');
Route::get('/admin/product/update/{id}', [ProductController::class, 'update_form'])->middleware('auth');
Route::get('/admin/product/detail/{id}', [ProductController::class, 'detail'])->middleware('auth');

Route::post('/admin/product/create', [ProductController::class, 'create'])->middleware('auth');
Route::post('/admin/product/update', [ProductController::class, 'update'])->middleware('auth');

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
