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

Route::get('/', ['as'=> 'home', 'uses'=>'PagesController@home'] );

Route::resource('/RegisterAccount','AccountController');
Auth::routes();

//Route::get('/convert', 'SnippController@convert')->name('convert');

//prem routes
//profile customer

Route::get('/customer/profile','CustomerController@index')->name('/customer/profile');
Route::get('/customer/readbook','CustomerController@readBook')->name('/customer/readbook');

Route::get('/category', 'SnippController@Category')->name('category');


//readbooks

Route::get('/customer/readbook/', function(){
	return redirect('/');
});
//for imagemagick rendering start
Route::get('/customer/readbook/{book_id}', ['as'=> '/customer/readbook/', 'uses'=>'CustomerController@ShowReadPage'] );

Route::post('fetchBookDataPopup', ['as'=> 'fetchBookDataPopup', 'uses'=>'SnippController@fetchBookDataPopup'] );

Route::get('/book/{id}', ['as'=> '/book/{id}', 'uses'=>'PagesController@showBookDetails'] );

Route::post('/reviewStore', ['as'=> 'reviewStore', 'uses'=>'SnippController@reviewStore'] );

Route::get('/buy/{id}', ['as'=> '/buy/{id}', 'uses'=>'PagesController@showBuyPage'] );

Route::get('/category/{category_name}', ['as'=> '/category/{category_name}', 'uses'=>'PagesController@showCategory'] );

Route::get('/category/{category_name}/{sub_category_name}', ['as'=> '/category/{category_name}/sub_category_name', 'uses'=>'PagesController@showSubCategory'] );

Route::get('/search', ['as'=> '/search', 'uses'=>'PagesController@search'] );

//payment verification
Route::post('verifyPayment', ['as'=> 'verifyPayment', 'uses'=>'PaymentController@verifyPayment'] );

// Route::post('/customer/readbook/fetch', 'SnippController@fetchBook')->name('/customer/readbook/fetch');

//end of prem routes
Route::get('/testjson', ['as'=> 'testjson', 'uses'=>'SnippController@testJson'] );



//bishal routes

Route::get('/admin',['as'=>'/admin','uses'=>'AdminController@index']);



//FOR CATEGORY
Route::post('/admin/category/Store',['as'=>'admin/category/Store','uses'=>'CategoryController@store']);
Route::post('/admin/getCategory', [ 'as' => '/admin/getCategory', 'uses' => 'AdminController@getCategory']);
//FOR ACCOUNT
Route::post('/admin/account/Store',['as'=>'admin/account/Store','uses'=>'AccountController@store']);
Route::get('/admin/addAccount',['as'=>'admin/addAccount','uses'=>'AdminController@addAccount']);
Route::post('/admin/account/Show',['as'=>'admin/account/Show','uses'=>'AccountController@adminShow']);
Route::get('/admin/viewAccount',['as'=>'admin/viewAccount','uses'=>'AdminController@viewAccount']);

Route::get('/admin/{id}/editAccount',['as'=>'admin/{id}/editAccount','uses'=>'AdminController@editAccount']);


Route::put('/admin/{id}',['as'=>'/admin/{id}','uses'=>'AccountController@destroy']);
Route::put('/admin/{id}',['as'=>'/admin/{id}','uses'=>'AccountController@update']);

//FOR BOOK
Route::get('/admin/addBook',['as'=>'admin/addBook','uses'=>'AdminController@addBook']);
Route::get('/admin/viewBook',['as'=>'admin/viewBook','uses'=>'AdminController@viewBook']);
Route::post('/admin/Book/Store',['as'=>'admin/Book/Store','uses'=>'BookController@store']);
Route::get('/admin/viewBook',['as'=>'admin/viewBook','uses'=>'AdminController@viewBook']);
Route::get('/admin/{id}/editBook',['as'=>'admin/{{id}}/editBook','uses'=>'AdminController@editBook']);
Route::delete('/admin/{id}',['as'=>'/admin/{id}','uses'=>'BookController@destroy']);
Route::put('/admin/Book/{id}',['as'=>'admin/Book/{id}','uses'=>'BookController@update']);
//For Transaction
Route::get('/admin/viewTransaction',['as'=>'admin/viewTransaction','uses'=>'AdminController@viewTransaction']);


Route::get('/admin/viewCategory',['as'=>'admin/viewCategory','uses'=>'AdminController@viewCategory']);
Route::get('/admin/addCategory',['as'=>'admin/addCategory','uses'=>'AdminController@addCategory']);

//end of bishal routes


//pralhad
Route::resource('/blog','BlogController');


Route::post('admin/addSlider',['as'=>'admin/addSlider', 'uses'=>'SliderController@store']);

Route::get('admin/Slider',['as'=>'admin/Slider', 'uses'=>'SliderController@index']);
Route::get('admin/Slider/destroy/{id}',['as'=>'admin/destroy', 'uses'=>'SliderController@destroy']);
Route::get('admin/Testimonial',['as'=>'admin/Testimonial', 'uses'=>'TestimonialController@index']);
 Route::post('admin/addTestimonial',['as'=>'admin/addTestimonail', 'uses'=>'TestimonialController@store']);
 Route::get('admin/Testimonial/destroy/{id}',['as'=>'admin/destroy', 'uses'=>'TestimonialController@destroy']);
//blog admin part
 Route::get('admin/addBlog',['as'=>'admin/addBlog', 'uses'=>'BlogController@addBlog']);
Route::get('admin/editBlog/{id}',['as'=>'admin/editBlog', 'uses'=>'BlogController@editBlog']);
Route::post('admin/storeBlog',['as'=>'admin/storeBlog', 'uses'=>'BlogController@store']);
Route::put('admin/updateBlog/{id}',['as'=>'admin/updateBlog', 'uses'=>'BlogController@updateBlog']);
Route::get('admin/showBlog',['as'=>'admin/showBlog', 'uses'=>'BlogController@showAdmin']);
Route::get('admin/destroyBlog/{id}',['as'=>'admin/destroyBlog', 'uses'=>'BlogController@destroyBlog']);

//end of pralhad routes





