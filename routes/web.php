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

Route::get('/',[\App\Http\Controllers\clientController::class,'index']);
Route::get('/about',[\App\Http\Controllers\clientController::class,'about']);
Route::get('/products',[\App\Http\Controllers\clientController::class,'products']);

//Route::view('/products','products');
//Route::view('/about','about');
Route::view('/cart','cart');
Route::view('/checkout','checkout');
Route::get('/productDetail/{id}',[\App\Http\Controllers\clientController::class,'productDetail']);
Route::post('/product/buy',[\App\Http\Controllers\clientController::class,'buy']);
