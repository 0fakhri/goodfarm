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
    return view('welcome');
});

Route::get('/login', 'LoginController@login')->name('login');
Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/postlogin', 'LoginController@postlogin');
Route::post('/regCu', 'RegisterController@create');
Route::get('/logout', 'LoginController@logout')->name('logout');
