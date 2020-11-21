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

use App\m_Mitra;
use App\m_Registrasi;
use Illuminate\Support\Facades\DB;

Route::group(['middleware' => 'web'], function() {
    Route::get('/register', 'c_Register@mengeklikMenu')->name('register');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/login', 'c_Login@mengeklikMenu')->name('login');

Route::post('/postlogin', 'c_Login@getData');
Route::post('/regCu', 'c_Register@menyimpanData');
Route::get('/logout', 'c_Login@logout')->name('logout');


Route::get('/verifikasi', 'c_Verifikasi@mengeklikMenu');
Route::post('/diterima', 'c_Verifikasi@diterima');
Route::post('/ditolak', 'c_Verifikasi@ditolak');

Route::group(['middleware' =>  ['auth', 'checkRole:admin']], function(){
    Route::get('/dashboard', 'c_Verifikasi@masukHalaman');
});

Route::get('/petani/profil', 'c_profil_petani@klikMenuProfil');



Route::get('/petani/list-investor', function (){
    $data_inv = DB::table('ca_investor')->join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->get();
    return view('petani.v_investor',['data'=>$data_inv]);
});

Route::group(['middleware' => ['auth', 'checkRole:petani']], function(){
    Route::get('/petani/dashboard', function () {
        return view('petani.v_Dashboard');
    });
});

Route::get('/investor/list-mitra/detail/{id}', 'c_Mitra@klikMenuMitra');
Route::get('/investor/list-mitra/detail/{id}/chat', 'c_Mitra@klikTombolChat');
Route::get('/investor/list-mitra/detail/{id}/investasi', 'c_Mitra@klikTombolInvestasi');
Route::get('/investor/profil', 'c_profil_investor@klikMenuProfil');


Route::get('/investor/list-mitra', function (){
    $data_pet = DB::table('ca_farmer')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->get();
    // dd($data_pet);
    return view('investor.v_mitra',['data'=>$data_pet]);
});

Route::group(['middleware' => ['auth', 'checkRole:investor']], function(){
    Route::get('/investor/dashboard', function () {
        return view('investor.v_Dashboard');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
