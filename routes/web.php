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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('product');
});

Route::resource('categories', 'CategoryController')->except(['destroy']);
Route::get('/categories/{id}/delete', 'CategoryController@destroy');

Route::get('/payment', function () {
    return view('payment');
});

Route::resource('sizecharts', 'SizechartController')->except(['destroy']);
Route::get('/sizecharts/{id}/delete', 'SizechartController@destroy');

Route::resource('customers', 'CustomerController')->except(['destroy']);
Route::get('/customers/{id}/delete', 'CustomerController@destroy');

Route::resource('products', 'ProductController')->except(['destroy']);
Route::get('/products/{id}/delete', 'ProductController@destroy');

Route::resource('purchases', 'PurchaseController')->except(['destroy']);
Route::get('/purchases/{id}/delete', 'PurchaseController@destroy');

Route::resource('discounts', 'DiscountController')->except(['destroy']);
Route::get('/discounts/{id}/delete', 'DiscountController@destroy');