<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@welcome');

Route::get('/home', 'PagesController@home');

Route::get('/details', 'PagesController@details');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/forgotpassword', 'PagesController@forgotpassword');

Route::get('/newpassword', 'PagesController@newpassword');

Route::get('/product', 'PagesController@product');

Route::get('/signin', 'PagesController@signin');

Route::get('/signup', 'PagesController@signup');

Route::get('/confirmation', 'PagesController@confirmation');

?>