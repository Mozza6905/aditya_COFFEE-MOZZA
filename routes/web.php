<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


route::get('/home', [HomeController::class, 'index']);
Route::get('/createHome', [HomeController::class, 'create']);
Route::post('/saveHome', [HomeController::class, 'store']);
Route::get('/editHome/{id}', [HomeController::class, 'edit']);
Route::put('/updateHome/{id}', [HomeController::class, 'update']);
Route::get('/deleteHome/{id}', [HomeController::class, 'destroy']);

route::get('/admin', [AdminController::class, 'index']);
Route::get('/createadmin', [AdminController::class, 'create']);
Route::post('/saveadmin', [AdminController::class, 'store']);
Route::get('/editadmin/{id}', [AdminController::class, 'edit']);
Route::put('/updateadmin/{id}', [AdminController::class, 'update']);
Route::get('/deleteadmin/{id}', [AdminController::class, 'destroy']);

route::get('/product', [ProductController::class, 'index']);
Route::get('/createproduct', [ProductController::class, 'create']);
Route::post('/saveproduct', [ProductController::class, 'store']);
Route::get('/editproduct/{id}', [ProductController::class, 'edit']);
Route::put('/updateproduct/{id}', [ProductController::class, 'update']);
Route::get('/deleteproduct/{id}', [ProductController::class, 'destroy']);
