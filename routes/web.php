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


Route::get('/','productsController@products')->name('products');
Route::get('products','productsController@products')->name('products');

Route::get('add/product','productsController@addProduct')->name('add.prodcut');

Route::post('store/product','productsController@storeProduct')->name('store.product');