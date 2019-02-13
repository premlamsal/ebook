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


Route::get('/','PagesController@index');
Route::resource('/RegisterAccount','AccountController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customer/profile','CustomerController@index')->name('/customer/profile');
Route::get('/customer/readbook','CustomerController@readBook')->name('/customer/readbook');

Route::get('/category', 'SnippController@Category')->name('category');

//Route::get('/convert', 'SnippController@convert')->name('convert');

//prem routes

Route::get('/customer/readbook/{bookname}', 'SnippController@ShowReadPage')->name('/customer/readbook');

Route::post('/customer/readbook/fetch', 'SnippController@fetchBook')->name('/customer/readbook/fetch');





