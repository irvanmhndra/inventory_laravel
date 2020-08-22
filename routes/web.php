<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('home');
    });

    Route::get('/', function () {
        return view('home');
    });

    Route::resources([
        'categories' => 'CategoryController',
        'discounts' => 'DiscountController',
        'sizecharts' => 'SizechartController',
        'customers' => 'CustomerController',
        'products' => 'ProductController',
        'purchases' => 'PurchaseController',
        'sales' => 'SaleController',
        'invoices' => 'InvoiceController',
    ]);
    Route::get('/categories/{id}/delete', 'CategoryController@destroy');
    Route::get('/discounts/{id}/delete', 'DiscountController@destroy');
    Route::get('/sizecharts/{id}/delete', 'SizechartController@destroy');
    Route::get('/sales/{id}/delete', 'SaleController@destroy');
    Route::get('/customers/{id}/delete', 'CustomerController@destroy');
    Route::get('/products/{id}/delete', 'ProductController@destroy');
    Route::get('/purchases/{id}/delete', 'PurchaseController@destroy');
    Route::get('/invoice/{id}/delete', 'InvoiceController@destroy');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
