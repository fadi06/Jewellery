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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','WelcomeController@index');

Route::get('/aboutUs', 'AboutUsController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/termAndConditions', 'TermAndConditionsController@index');
Route::get('/contactUs', 'ContactUsController@index');

Route::get('/cart', 'CartController@index');
Route::get('/checkOut', 'CartController@checkOut');
Route::get('/thankYou', 'CartController@thankYou');

Route::get('/faq', 'FaqController@index');
Route::get('/productDetail', 'ProductsController@productDetail');
Route::get('/register', 'WelcomeController@register');
//Route::get('/','WelcomeController@index')->name('welcome');
Auth::routes();

Route::get('/admin', 'HomeController@index');


