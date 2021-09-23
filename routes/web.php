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
    Route::get('/cart',[\App\Http\Controllers\CartController::class,'cart']);
    Route::get('/cart/remove/{id}',[\App\Http\Controllers\CartController::class,'cart_del']);
    Route::post('/cart/update',[\App\Http\Controllers\CartController::class,'cart_update']);
    Route::post('/order/save',[\App\Http\Controllers\CartController::class,'cart_save']);
    Route::post('/stripe', [\App\Http\Controllers\CartController::class,'stripePost'])->name('stripe.post');
    Route::get('paymentsuccess', [\App\Http\Controllers\CartController::class,'payment_success']);
    Route::get('paymenterror', [\App\Http\Controllers\CartController::class,'payment_error']);

    Route::get('/checkout',[\App\Http\Controllers\CartController::class,'checkout']);
    Route::get('/productDetail/{id}',[\App\Http\Controllers\clientController::class,'productDetail']);
    Route::post('/product/buy',[\App\Http\Controllers\clientController::class,'buy']);



