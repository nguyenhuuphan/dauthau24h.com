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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['admin'])->group(function() {
	Route::get('/dashboard', 'AdminController@index')->name('dashboard');
	Route::get('/dashboard/users', 'Admin\UserController@index')->name('list_users');
	Route::get('/dashboard/users/create', 'UserController@create')->name('add_user');
	Route::get('/dashboard/users/store', 'UserController@store')->name('store_user');
	Route::get('/dashboard/users/delete/{id}', 'UserController@delete')->name('delete_user');
	Route::get('/dashboard/users/edit/{id}', 'UserController@edit')->name('edit_user');
	Route::get('/dashboard/users/update/{id}', 'UserController@update')->name('update_user');
	Route::get('/dashboard/users/bids/{id}', 'UserController@listBids')->name('list_bids');
});

Route::middleware(['auth'])->group(function() {

	Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {

		// Route::get('/dashboard', 'AdminController@index')->name('dashboard');

		Route::get('/bidder', 'BidderController@index')->name('bidder');
		Route::get('/bidder/bids/{bidder_id}', 'BidderController@listBidderBids')->name('list_bidder_bids');

    });


	// Route::get('/dashboard/users', 'UserController@index')->name('list_users');


	Route::get('/dashboard/bids', 'BidsController@index')->name('list_all_bids');
	Route::get('/dashboard/bids/delete/{id}', 'BidsController@delete')->name('delete_bid');
	Route::get('/dashboard/bids/detail/{id}', 'BidsController@detail')->name('detail_bid');
	Route::get('/dashboard/bids/edit/{id}', 'BidsController@edit')->name('edit_bid');
	Route::get('/dashboard/bids/update/{id}', 'BidsController@update')->name('update_bid');


	Route::get('/dashboard/rate', 'RatesController@index')->name('list_rates');
	Route::get('/dashboard/rate/delete/{id}', 'RatesController@delete')->name('delete_rate');



	Route::get('/bids/create/{bidder_id}', 'BidsController@create')->name('create_bid');
	Route::get('/bids/store/{bidder_id}', 'BidsController@store')->name('store_bid');
	Route::get('/bids/detail/{id}/{bidder_id}', 'BidsController@detailFrontend')->name('detail_bid_frontend');
	Route::get('/bids/edit/{bid_id}/{bidder_id}', 'BidsController@editFrontend')->name('edit_bid_frontend');
	Route::get('/bids/update/{id}/{bidder_id}', 'BidsController@updateFrontend')->name('update_bid_frontend');
	Route::get('/bids/delete/{id}/{bidder_id}', 'BidsController@deleteFrontend')->name('delete_bid_frontend');


	Route::get('/bids', 'BidsController@KHlistBidsFrontend')->name('KH_list_bids_frontend');
	Route::get('/bids/detail/{id}', 'BidsController@KHdetailFrontend')->name('KH_detail_bid_frontend');
	Route::get('/bids/rate', 'BidsController@KHdetailFrontend')->name('KH_detail_bid_frontend');


	Route::get('/user/edit/{id}', 'UserController@editProfile')->name('edit_profile');
	Route::get('/user/update/{id}', 'UserController@updateProfile')->name('update_profile');


	Route::get('/user/rates/{user_id}', 'RatesController@listRate')->name('user_rates');
	Route::get('/user/rates/delete/{rate_id}/{user_id}', 'RatesController@deleteFrontend')->name('delete_rate_frontend');
	Route::get('/user/rating', 'RatesController@createRating')->name('create_rating');

});
