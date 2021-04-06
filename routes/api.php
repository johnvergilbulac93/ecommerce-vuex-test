<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(function () {
    Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('show-products');
    Route::get('/products/{productID}', [App\Http\Controllers\ProductsController::class, 'show'])->name('view-products');

    Route::get('/cart', [App\Http\Controllers\CartsController::class, 'index'])->name('show-cart');
    Route::post('/cart', [App\Http\Controllers\CartsController::class, 'store'])->name('store-cart');
    Route::delete('/cart/{productID}', [App\Http\Controllers\CartsController::class, 'destroy'])->name('destroy');
    Route::delete('/cart', [App\Http\Controllers\CartsController::class, 'destroyAll'])->name('destroy-all');

// });
