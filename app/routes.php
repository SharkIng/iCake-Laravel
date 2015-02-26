<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', [
	'as' => '/',
	'uses' => 'IndexController@show'
]);

Route::get('/product/{id}', [
	'as' => 'product/{id}',
	'uses' => 'ProductController@show'
]);

Route::get('/about', [
	'as' => 'about',
	'uses' => 'HomeController@about'
]);

Route::get('/products', [
	'as' => 'products',
	'uses' => 'HomeController@products'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'ContactController@getContact'
]);

Route::post('contact_request', 'ContactController@getContactForm');