<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::auth();

Route::get('/', ['as' => 'home', 'uses' => 'HomepageController@index']);

Route::get('llety', ['as' => 'listings', 'uses' => 'ListingController@index']);
Route::get('llety/{listing}', ['as' => 'listings.show', 'uses' => 'ListingController@show']);
Route::post('llety/{listing}', ['uses' => 'ListingController@saveBooking']);

Route::get('cais', ['as' => 'listings.create', 'uses' => 'CreateListingController@details']);
Route::post('cais', ['uses' => 'CreateListingController@saveDetails']);
Route::get('cais/lluniau', ['as' => 'listings.images', 'uses' => 'CreateListingController@images']);
Route::post('cais/lluniau', ['uses' => 'CreateListingController@saveImages']);
Route::get('cais/talu', ['as' => 'listings.pay', 'uses' => 'CreateListingController@payment']);
Route::post('cais/talu', ['uses' => 'CreateListingController@savePayment']);

// static pages
Route::get('gwybodaeth/{page}', ['as' => 'page.show', 'uses' => 'PageController@show']);
