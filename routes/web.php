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

Route::get('/home', ['as'=> 'home', 'uses'=>'PagesController@home'] );

Route::get('/faq', ['as'=> 'faq', 'uses'=>'PagesController@faq'] );

Route::get('/policy', ['as'=> 'policy', 'uses'=>'PagesController@policy'] );

Route::resource('/RegisterAccount','AccountController');

Route::get('/orderBook/{id}', ['as'=> 'order', 'uses'=>'PagesController@orderBook'] );

Route::post('/registerCustomer', ['as'=> 'registerCustomer', 'uses'=>'AccountController@registerCustomer'] );

Route::get('/opps', ['as'=> 'opps', 'uses'=>'PagesController@opps'] );


Route::get('verifyEsewa','EsewaController@verifyEsewa')->name('verifyEsewa');

Route::get('failedEsewa','EsewaController@failed')->name('failedEsewa');



//order book
Route::get('/order/{id}', ['as'=> 'order', 'uses'=>'PagesController@order'] );

//post order
Route::post('/postOrder', ['as'=> 'postOrder', 'uses'=>'PagesController@postOrder'] );


Auth::routes();

//Route::get('/convert', 'SnippController@convert')->name('convert');



//readbooks

//for imagemagick rendering start


Route::post('fetchBookDataPopup', ['as'=> 'fetchBookDataPopup', 'uses'=>'SnippController@fetchBookDataPopup'] );

Route::get('/book/{id}', ['as'=> '/book/{id}', 'uses'=>'PagesController@showBookDetails'] );

Route::post('/reviewStore', ['as'=> 'reviewStore', 'uses'=>'SnippController@reviewStore'] );


Route::get('/category/{category_name}', ['as'=> '/category/{category_name}', 'uses'=>'PagesController@showCategory'] );

Route::get('/category/{category_name}/{sub_category_name}', ['as'=> '/category/{category_name}/sub_category_name', 'uses'=>'PagesController@showSubCategory'] );

Route::get('/search', ['as'=> '/search', 'uses'=>'PagesController@search'] );

//payment verification
Route::post('verifyPayment', ['as'=> 'verifyPayment', 'uses'=>'PaymentController@verifyPayment'] );

// Route::post('/customer/readbook/fetch', 'SnippController@fetchBook')->name('/customer/readbook/fetch');

//end of prem routes
Route::get('/testjson', ['as'=> 'testjson', 'uses'=>'SnippController@testJson'] );



//bishal routes
//admin group middleware route **keep routes of admin inside this otherwise the security breaks
//or you can use singleton like this ** Route::get('/admin',['as'=>'/admin','uses'=>'AdminController@index'])->middleware('admin');
//********

 Route::group(['middleware' => ['admin']], function () {
	//keep admin routes here inside

Route::get('/admin',['as'=>'/admin','uses'=>'AdminController@index'])->middleware('admin');
//FOR CATEGORY
Route::get('/admin/viewCategory',['as'=>'admin/viewCategory','uses'=>'AdminController@viewCategory']);
Route::get('/admin/addCategory',['as'=>'admin/addCategory','uses'=>'AdminController@addCategory']);
Route::post('/admin/category/storeCat',['as'=>'admin/category/storeCat','uses'=>'CategoryController@storeCat']);
Route::get('admin/addSubCategory',['as'=>'admin/addSubCategory','uses'=>'AdminController@addSubCategory']);
Route::post('/admin/category/storeSubCat',['as'=>'admin/category/storeSubCat','uses'=>'CategoryController@storeSubCat']);

Route::post('/admin/getSubCategory', [ 'as' => '/admin/getSubCategory', 'uses' => 'AdminController@getSubCategory']);

Route::delete('/admin/{id}/Catdestroy',['as'=>'/admin/{id}/Catdestroy','uses'=>'CategoryController@Catdestroy']);
Route::delete('/admin/{id}/SubCatdestroy',['as'=>'/admin/{id}/SubCatdestroy','uses'=>'CategoryController@SubCatdestroy']);
Route::get('/admin/{id}/editCategory',['as'=>'admin/{id}/editCategory','uses'=>'AdminController@editCategory']);
Route::get('/admin/{id}/editSubCategory',['as'=>'admin/{id}/editSubCategory','uses'=>'AdminController@editSubCategory']);
Route::put('/admin/SubCategory/{id}',['as'=>'admin/SubCategory/{id}','uses'=>'CategoryController@SubCatupdate']);
Route::put('/admin/Category/{id}',['as'=>'admin/Category/{id}','uses'=>'CategoryController@Catupdate']);
//FOR ACCOUNT
Route::post('/admin/account/Store',['as'=>'admin/account/Store','uses'=>'AccountController@store']);
Route::get('/admin/addAccount',['as'=>'admin/addAccount','uses'=>'AdminController@addAccount']);
Route::post('/admin/account/Show',['as'=>'admin/account/Show','uses'=>'AccountController@adminShow']);
Route::get('/admin/viewAccount',['as'=>'admin/viewAccount','uses'=>'AdminController@viewAccount']);
Route::get('/admin/{id}/editAccount',['as'=>'admin/{id}/editAccount','uses'=>'AdminController@editAccount']);


//FOR BOOK
Route::get('/admin/addBook',['as'=>'admin/addBook','uses'=>'AdminController@addBook']);
Route::get('/admin/viewBook',['as'=>'admin/viewBook','uses'=>'AdminController@viewBook']);
Route::post('/admin/Book/Store',['as'=>'admin/Book/Store','uses'=>'BookController@store']);
Route::get('/admin/viewBook',['as'=>'admin/viewBook','uses'=>'AdminController@viewBook']);
Route::get('/admin/{id}/editBook',['as'=>'admin/{id}/editBook','uses'=>'AdminController@editBook']);

Route::post('/admin/removeBook/{id}',['as'=>'/admin/removeBook/{id}','uses'=>'BookController@destroy']);



Route::put('/admin/Book/{id}',['as'=>'admin/Book/{id}','uses'=>'BookController@update']);
//For Transaction
Route::get('/admin/viewTransaction',['as'=>'admin/viewTransaction','uses'=>'AdminController@viewTransaction']);


//For Publication
Route::get('admin/addPublication',['as'=>'admin/addPublication', 'uses'=>'AdminController@addPublication']);
Route::get('admin/showPublication',['as'=>'admin/showPublication', 'uses'=>'AdminController@showPublication']);
Route::post('/admin/Publication/Store',['as'=>'admin/Publication/Store','uses'=>'PublicationController@store']);
Route::get('/admin/{id}/editPublication',['as'=>'admin/{id}/editPublication','uses'=>'AdminController@editPublication']);
Route::delete('/admin/{id}',['as'=>'/admin/{id}','uses'=>'PublicationController@destroy']);
Route::put('/admin/Publication/{id}',['as'=>'admin/Publication/{id}','uses'=>'PublicationController@update']);
//end of bishal routes



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

Route::get('admin/about',['as'=>'admin/about', 'uses'=>'AboutController@index']);
Route::get('admin/aboutEdit/{id}',['as'=>'admin/aboutEdit', 'uses'=>'AboutController@edit']);
Route::put('admin/update/{id}',['as'=>'admin/update', 'uses'=>'AboutController@update']);
//about staffs route
// Route::resource('admin/staffs','StaffController');
Route::get('admin/staffs', ['as'=> 'admin/staffs', 'uses'=>'StaffController@index'] );
Route::Post('admin/addStaffs', ['as'=> 'admin/addStaffs', 'uses'=>'StaffController@store'] );
Route::get('admin/destroyStaffs/{id}', ['as'=> 'admin/destroyStaffs', 'uses'=>'StaffController@destroy'] );
Route::get('admin/EditStaffs/{id}',['as'=>'admin/EditStaff', 'uses'=>'StaffController@edit']);
Route::put('admin/UpdateStaffs/{id}',['as'=>'admin/UpdateStaff', 'uses'=>'StaffController@update']);
//writer slider
Route::get('admin/writer', ['as'=> 'admin/writer', 'uses'=>'WriterController@index'] );

Route::post('admin/writerStore', ['as'=> 'admin/writerStore', 'uses'=>'WriterController@store'] );
Route::get('admin/writerdelete/{id}', ['as'=> 'admin/writerdelete', 'uses'=>'WriterController@destroy'] );

//prem routes
//show gallery
Route::get('admin/gallery', ['as'=> 'admin/gallery', 'uses'=>'AdminController@gallery'] );
//show add form for gallery
Route::get('admin/gallery/add', ['as'=> 'admin/gallery/add', 'uses'=>'AdminController@addGallery'] );
//showing update from for gallery
Route::get('admin/gallery/update/{id}', ['as'=> 'admin/gallery/update/{id}', 'uses'=>'AdminController@updateGallery'] );

//saving new gallery
Route::post('admin/gallery/save', ['as'=> 'admin/gallery/save', 'uses'=>'GalleryController@saveGallery'] );
//saving edited gallery
Route::post('admin/gallery/edit', ['as'=> 'admin/gallery/edit', 'uses'=>'GalleryController@editGallery'] );

//removing gallery
Route::get('admin/gallery/delete/{id}', ['as'=> 'admin/gallery/delete/{id}', 'uses'=>'GalleryController@removeGallery'] );

//subscribers
Route::get('admin/subscribers', ['as'=> 'admin/subscribers', 'uses'=>'AdminController@viewSubscribers'] );

//stationery list
Route::get('admin/stationery', ['as'=> 'admin.stationery', 'uses'=>'AdminController@viewStationery'] );
//show new stationery add form
Route::get('admin/stationery/add', ['as'=> 'stationery.add', 'uses'=>'AdminController@addStationery'] );
//save new stationery data
Route::post('admin/stationery/store', ['as'=> 'admin.stationery.store', 'uses'=>'StationeryController@store'] );
//directly deletes the stationery
Route::get('admin/stationery/delete/{id}', ['as'=> 'admin.stationery.delete', 'uses'=>'StationeryController@delete'] );
//get edit form for stationery
Route::get('admin/stationery/edit/{id}', ['as'=> 'admin.stationery.edit', 'uses'=>'AdminController@editStationery'] );

//update stationery
Route::post('admin/stationery/update', ['as'=> 'admin.stationery.update', 'uses'=>'StationeryController@update'] );


Route::get('admin/orders', ['as'=> 'admin.orders', 'uses'=>'AdminController@orders'] );


 }); //end of gorup admin middleware routes
Route::post('admin/stationery/store', ['as'=> 'admin.stationery.store', 'uses'=>'StationeryController@store'] );

//pralhad
Route::resource('/blog','BlogController');
//about route
Route::get('/about', ['as'=> 'about', 'uses'=>'PagesController@about'] );
//end of pralhad routes

//prem routes
Route::get('/contact', ['as'=> 'contact', 'uses'=>'PagesController@contact'] );
Route::get('/gallery', ['as'=> 'gallery', 'uses'=>'PagesController@gallery'] );
//end of prem routes

//addSubscribers

Route::post('addSubscriber', ['as'=> 'addSubscriber', 'uses'=>'PagesController@addSubscriber'] );




//customer middle ware
Route::group(['middleware' => ['customer']], function () {

Route::get('/customer/readbook/{book_id}', ['as'=> '/customer/readbook/', 'uses'=>'CustomerController@ShowReadPage'] );
//prem routes
//wishlist
Route::get('/wishlist', ['as'=> '/wishlist', 'uses'=>'WishlistController@show'] );

Route::post('insertWishlist', ['as'=> 'insertWishlist', 'uses'=>'WishlistController@add'] );

Route::post('deleteWishlist', ['as'=> 'deleteWishlist', 'uses'=>'WishlistController@remove'] );


Route::post('khalti/verification', 'KhaltiController@transaction')->name('khalti.verification');


Route::get('/nack', ['as'=> 'nack', 'uses'=>'PagesController@nack'] );

Route::get('/buy/{id}', ['as'=> '/buy/{id}', 'uses'=>'PagesController@showBuyPage'] );

//prem routes
//profile customer

Route::get('/customer/profile','CustomerController@index')->name('/customer/profile');

Route::get('/customer/readbook','CustomerController@readBook')->name('/customer/readbook');

Route::get('/customer/profile/settings','CustomerController@profileSettings')->name('customer.profile.settings');

Route::post('/customer/profile/settings/update','CustomerController@profileSettingsUpdate')->name('customer.profile.settings.update');


 });//end of customer routes

// Route::get('/category', 'SnippController@Category')->name('category');


//khalti

// Route::post('khalti/verification', ['as'=> 'khalti.verification', 'uses'=>'KhaltiController@transaction'] );

//  Route::get('khalti/verify', 'KhaltiController@test')->name('khalti.test');
	 
// Route::get('subtract/{a}/{b}', 'KhaltiController@subtract');

//stationery routes


Route::get('stationery','PagesController@stationery')->name('stationery');




//esewa routes


// //esewa routes

//checks the permission and give the file contents to user.
//token string is fake to elimiate some illegal attempt to application
Route::get('/getBookFile/{book_name}/{token}','SnippController@checkStorage')->name('checkStorage');


Route::get('/create-storage-link', function () {
    Artisan::call('storage:link');
});



