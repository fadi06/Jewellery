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
    return view('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	// aboutUs
	Route::group(['prefix','aboutUs'],function(){
		Route::get('/aboutUs','AboutUsController@adminIndex')->name('aboutUs');
		Route::post('/addAboutUs','AboutUsController@addAboutUs')->name('addAboutUs');
	});

	//Banners
	Route::group(['prefix'=>'banners'], function(){
		Route::get('viewBanner', 'BannerController@index')->name('viewBanner');
		Route::get('addBanner', 'BannerController@create')->name('addBanner');
		Route::post('addBanner', 'BannerController@store')->name('addBannerProcess');
		Route::get('editBanner/{id}', 'BannerController@edit')->name('editBanner');
		Route::get('deleteBanner/{id}', 'BannerController@destroy')->name('deleteBanner');
		Route::post('editBanner', 'BannerController@update')->name('editBannerProcess');
	});
    
