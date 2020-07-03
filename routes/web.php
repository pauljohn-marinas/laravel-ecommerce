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

Auth::routes();

Route::get('/', 'WebsiteController@index');
Route::get('/home', 'WebsiteController@index')->name('home');
Route::get('/product-detail/{id}', 'WebsiteController@productDetail')->name('product-detail');
Route::get('/products', 'WebsiteController@product')->name('products');
Route::get('/contact', 'WebsiteController@create')->name('contact')->middleware('auth');
Route::post('/contact', 'WebsiteController@store')->name('contact.store')->middleware('auth');
Route::get('/cart', 'WebsiteController@cart')->name('cart')->middleware('auth');

Route::delete('/order/{id}', 'OrderController@destroy')->name('order.destroy');
Route::post('/order', 'OrderController@store')->name('order.store')->middleware('auth');
Route::post('/order/single', 'OrderController@store')->name('order.store.single')->middleware('auth');