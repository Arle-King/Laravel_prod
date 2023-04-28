<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Authorization');
})->name("Authorization");

Route::get('/Registration', function () {
    return view('Registration');
})->name("Registration");

Route::get('/Account', function () {
    return view('Account');
})->name("Account");

Route::post('/reg', 'UsersController@users');

Route::post('/modification', 'UsersController@modification');

Route::post('/all', 'UsersController@allUsers');
