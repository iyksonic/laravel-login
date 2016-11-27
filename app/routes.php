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

// Route::get('/', function()
// {
// 	return View::make('pages.login');
// });
Route::get('/', 'HomeController@showLogin');
Route::get('/login', 'HomeController@showLogin');

Route::post('register', ['uses'=>'HomeController@storeUser', 'as'=>'storeuser']);
Route::post('login', ['uses'=>'HomeController@authenticate', 'as'=>'authenticate']);


Route::group(['before'=>'auth'], function(){

Route::get('home', 'HomeController@showHome');
Route::get('about', 'HomeController@showAbout');
Route::get('portfolio', 'HomeController@showPortfolio');
Route::get('scodes', 'HomeController@showScodes');
Route::get('contact', 'HomeController@showContact');
Route::get('logout', 'HomeController@logout');

});
