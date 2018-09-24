<?php

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

Route::get('/', 'HomeController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@send');
Route::get('/products', 'HomeController@showProducts');
Route::get('/category/{cat}', ['uses' => 'HomeController@showProducts']);

Route::post('/addcart', 'CartController@addToCart');
Route::get('/cart','CartController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
