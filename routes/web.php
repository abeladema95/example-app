<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get("/product/{id}/owner","\App\Http\Controllers\ProductController@owner");
Route::get("/product/{id}", '\App\Http\Controllers\ProductController@show');
Route::get("/user/{email}/products","\App\Http\Controllers\UserController@products")->name('myProducts');

Route::get("/{email?}", '\App\Http\Controllers\UserController@show');
