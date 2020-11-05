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
Route::post('/regCu', 'RegisterController@store');
// Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){
    Route::get('/dashboard', 'AdminController@dashboard');
    // Route::get('/dataart', 'AdminController@dataart');
    // Route::get('/datamaster', 'AdminController@datamaster');
    // Route::post('/dataart/create','AdminController@create');
    // Route::get('/art/edit/{id}', 'AdminController@edit');
    // Route::get('/edit/{id}', 'AdminController@editadmin');
    // Route::post('/art/{id}/update', 'AdminController@update');
    // Route::post('/admin/{id}/update', 'AdminController@updateadmin');
    // Route::get('/notfound', 'notfoundController@notfound');
    // Route::get('art/profile/{id}','AdminController@profilart');
    // Route::get('master/profile/{id}','AdminController@profilmaster');
    // Route::get('dataku/{id}','AdminController@profiladmin');
});