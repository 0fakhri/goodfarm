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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', 'c_Login@login')->name('login');
Route::get('/register', 'c_Register@index')->name('register');
Route::post('/postlogin', 'c_Login@postlogin');
Route::post('/regCu', 'c_Register@store');
// Route::get('/logout', 'c_Login@logout')->name('logout');


Route::get('/dashboard', 'c_Verifikasi@index');
    Route::get('/verifikasi', 'c_Verifikasi@indexVerifikasi');
    Route::post('/diterima', 'c_Verifikasi@diterima');
    Route::post('/ditolak', 'c_Verifikasi@ditolak');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
    
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

Route::get('/petani/dashboard', function () {
    return view('petani.v_Dashboard');
});
Route::get('/petani/list-investor', function (){
    $data_inv = DB::table('ca_investor')->join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->get();
    return view('petani.v_investor',['data'=>$data_inv]);
});

Route::group(['middleware' => ['auth', 'checkRole:petani']], function(){
    
});

Route::get('/investor/dashboard', function () {
    return view('investor.v_Dashboard');
});
Route::get('/investor/list-mitra', function (){
    $data_pet = DB::table('ca_farmer')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->get();
    return view('investor.v_mitra',['data'=>$data_pet]);
});

Route::group(['middleware' => ['auth', 'checkRole:investor']], function(){
    
});

