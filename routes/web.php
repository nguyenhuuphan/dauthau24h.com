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


Auth::routes();



Route::middleware(['approved', 'admin'])->group(function() {
	Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');
	Route::get('/dashboard/users', 'Admin\UserController@index')->name('list_users');
	Route::get('/dashboard/users/create', 'Admin\UserController@create')->name('add_user');
	Route::get('/dashboard/users/store', 'Admin\UserController@store')->name('store_user');
	Route::get('/dashboard/users/delete/{id}', 'Admin\UserController@delete')->name('delete_user');
	Route::get('/dashboard/users/edit/{id}', 'Admin\UserController@edit')->name('edit_user');
	Route::get('/dashboard/users/update/{id}', 'Admin\UserController@update')->name('update_user');
	Route::get('/dashboard/users/bids/{id}', 'Admin\UserController@listBids')->name('list_bids');

	Route::get('/dashboard/bids', 'Admin\BidsController@index')->name('list_all_bids');
	Route::get('/dashboard/bids/delete/{id}', 'Admin\BidsController@delete')->name('delete_bid');
	Route::get('/dashboard/bids/detail/{id}', 'Admin\BidsController@detail')->name('detail_bid');
	Route::get('/dashboard/bids/edit/{id}', 'Admin\BidsController@edit')->name('edit_bid');
	Route::get('/dashboard/bids/update/{id}', 'Admin\BidsController@update')->name('update_bid');

	Route::get('/dashboard/rate', 'Admin\RateController@index')->name('list_rates');
	Route::get('/dashboard/rate/delete/{id}', 'Admin\RateController@delete')->name('delete_rate');
});


Route::middleware(['approved', 'bidder'])->group(function() {
	Route::get('/bidder', 'Frontend\UserController@index')->name('user_dashboard');
	Route::get('/bidder/bids', 'Frontend\BidderController@listBidderBids')->name('list_bidder_bids');
	Route::get('/bidder/bids/create', 'Frontend\BidderController@create')->name('create_bid');
	Route::get('/bidder/bids/store', 'Frontend\BidderController@store')->name('store_bid');
	Route::get('/bidder/bids/detail/{id}', 'Frontend\BidderController@detail')->name('detail_bid_frontend');
	Route::get('/bidder/bids/edit/{id}', 'Frontend\BidderController@edit')->name('edit_bid_frontend');
	Route::get('/bidder/bids/update/{id}', 'Frontend\BidderController@update')->name('update_bid_frontend');
	Route::get('/bidder/bids/delete/{id}', 'Frontend\BidderController@delete')->name('delete_bid_frontend');
});


Route::middleware(['auth', 'approved'])->group(function() {
	Route::get('/user', 'Frontend\UserController@index')->name('user_dashboard');
	Route::get('/user/edit', 'Frontend\UserController@editProfile')->name('edit_profile');
	Route::get('/user/update', 'Frontend\UserController@updateProfile')->name('update_profile');
	Route::get('/user/rates', 'Frontend\RatesController@listRate')->name('user_rates');
	Route::get('/user/rates/delete/{id}', 'Frontend\RatesController@deleteFrontend')->name('delete_rate_frontend');
	Route::get('/user/rating/{id}', 'Frontend\RatesController@createRating')->name('user_rating');

	Route::get('/bids/bid/{id}', 'Frontend\BidController@store')->name('store_bid_frontend');

});



	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/approval', 'HomeController@approval')->name('approval');

	Route::get('/bids', 'Frontend\BidsController@index')->name('list_bids_frontend');
	Route::get('/bids/detail/{id}', 'Frontend\BidsController@detail')->name('detail_bid_frontend');
	Route::get('/bids/rate', 'Frontend\BidsController@KHdetailFrontend')->name('KH_detail_bid_frontend');











