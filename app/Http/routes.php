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
use App\Training_Resource;

Route::get('/', 'WelcomeController@index');


Route::get('home', 'HomeController@index');

/*Route::get('api/training_resource/parentid/{id}', function ($id) {
    return Training_Resource::where('training_resource_parentResourceId', '=', $id)->get();
});*/

Route::resource('api/training_resource', 'Training_Resource_Controller');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
