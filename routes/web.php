<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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

Route::get('/', Controllers\HomeController::class)
    ->name('index');

Route::get('/cart', [Controllers\CartController::class, "displayCart"])
    ->name('cart');

Route::get('/product', [Controllers\ProductController::class, "listOfProductsByName"])
    ->name('displayProducts');

Route::get('/product/name', [Controllers\ProductController::class, "listOfProductsByName"])
    ->name('displayProducts');

Route::get('/product/price', [Controllers\ProductController::class, "listOfProductsByPrice"])
    ->name('displayProducts');

Route::get('/product/{id}', [Controllers\ProductController::class, 'displayID'])
    ->where('id', '[0-9]+')
    ->name('productDetails');

Route::get('/backoffice', [Controllers\BackofficeController::class, 'display'])
    ->name('backoffice');

Route::get('/backoffice/product', [Controllers\BackofficeController::class, 'productList'])
    ->name('backoffice-productList');

Route::get('/backoffice/product/{product}/edit', [Controllers\BackofficeController::class, 'editProduct'])
    ->where('product', '[0-9]+')
    ->name('edit-product');

Route::post('/backoffice/product', [Controllers\BackofficeController::class, 'store'])
    ->name('store-product');

Route::put('/backoffice/product/{id}', [Controllers\BackofficeController::class, 'update'])
    ->name('save-edit');

Route::delete('/backoffice/delete/{id}', [Controllers\BackofficeController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->name('delete-product');

