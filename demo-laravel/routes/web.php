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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('orihome');
Route::get('/legos', [App\Http\Controllers\FrontController::class, 'legos'])->name('legos');
Route::get('/legos/{id}', [App\Http\Controllers\FrontController::class, 'lego'])->name('lego');
Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('cart', App\Http\Controllers\CartController::class);
Route::resource('address', App\Http\Controllers\AddressController::class);


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');

    Route::get('/shipping-info', [App\Http\Controllers\AddressController::class, 'index'])->name('checkout.shipping');
    Route::resource('product', App\Http\Controllers\ProductsController::class);
    Route::resource('category', App\Http\Controllers\CategoriesController::class);
});