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


Route::get('/', array( 
					'as' => 'welcome', 
					'uses'=>'ContactController@index'));

Route::get('/contacts', array( 
					'as'=>'contacts',
					'uses'=>'ContactController@showAll'));

Route::get('/contacts/add', array( 
					'as'=>'add_contacts',
					'uses'=>'ContactController@create'));
Route::post('/contacts/add', array( 
					'as'=>'add_contacts',
					'uses'=>'ContactController@store'));