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

Route::resources([
    'categories' => 'CategoryController',
    'discounts' => 'DiscountController',
]);
Route::get('/categories/{id}/delete', 'CategoryController@destroy');
Route::get('/discounts/{id}/delete', 'DiscountController@destroy');

Route::get('/payment', function () {
    return view('payment');
});
