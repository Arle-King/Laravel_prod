<?php

use Illuminate\Support\Facades\Route;

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
    return view('Authorization');
})->name("Authorization");

Route::get('/Registration', function () {
    return view('Registration');
})->name("Registration");

Route::get('/Account/{id}', 'UsersDBController@OnePerson')->name("Account");

Route::post('/Auth', 'UsersDBController@inp'); 

Route::post('/reg', 'UsersDBController@registr'); 

Route::post('/Account/{id}/modification', 'UsersDBController@mod');

Route::post('/Account/{id}/delete', 'UsersDBController@del');



