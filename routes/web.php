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

Route::get('/products', [Controllers\ProductController::class, "listOfProductsByName"])
    ->name('displayProducts');

Route::get('/products/categories', [Controllers\CategoriesController::class, "index"])
    ->name('displayCategories');

Route::get('/product/name', [Controllers\ProductController::class, "listOfProductsByName"])
    ->name('displayProducts');

Route::get('/product/price', [Controllers\ProductController::class, "listOfProductsByPrice"])
    ->name('displayProducts');

Route::get('/product/{id}', [Controllers\ProductController::class, 'displayID'])
    ->where('id', '[0-9]+')
    ->name('productDetails');

Route::get('/backoffice', [Controllers\BackofficeController::class, 'display'])
    ->name('backoffice');

Route::get('/backoffice/products', [Controllers\BackofficeController::class, 'productList'])
    ->name('backoffice.productslist');

Route::get('/backoffice/products/{product}/edit', [Controllers\BackofficeController::class, 'editProduct'])
    ->where('product', '[0-9]+')
    ->name('products.edit');

Route::post('/backoffice/products', [Controllers\BackofficeController::class, 'store'])
    ->name('products.store');

Route::put('/backoffice/product/{product}', [Controllers\BackofficeController::class, 'update'])
    ->where('product', '[0-9]+')
    ->name('products.update');

Route::delete('/backoffice/delete/{id}', [Controllers\BackofficeController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->name('products.destroy');

Route::get('backoffice/product/create', [Controllers\BackofficeController::class, 'create1'])
    ->name('products.create');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
