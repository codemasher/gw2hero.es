<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// characters
Route::get('c/{name}', ['uses' => 'CharacterController@getIndex', 'as' => 'character']);

// settings
Route::controllers([
    'settings/accounts' => 'Settings\AccountsController',
    'settings' => 'Settings\SettingsController'
]);

// authentication
Route::controllers([
	'auth'     => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
