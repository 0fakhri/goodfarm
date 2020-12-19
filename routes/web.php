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
use Illuminate\Support\Facades\Mail;

Route::group(['middleware' => 'web'], function() {
    Route::get('/register', 'c_Register@mengeklikMenu')->name('register');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', 'c_Login@mengeklikMenu')->name('login');

Route::post('/postlogin', 'c_Login@getData');
Route::post('/regCu', 'c_Register@menyimpanData');
Route::get('/logout', 'c_Login@logout')->name('logout');




Route::group(['middleware' =>  ['auth', 'checkRole:admin']], function(){
    Route::get('/dashboard', 'c_Verifikasi@masukHalaman');
    Route::get('/verifikasi', 'c_Verifikasi@mengeklikMenu');
    Route::get('/verif-transaksi', 'c_veriftransaksi@mengeklikMenu');
    Route::post('/diterima', 'c_Verifikasi@diterima');
    Route::post('/ditolak', 'c_Verifikasi@ditolak');
    Route::post('/terima', 'c_veriftransaksi@diterima');
    Route::post('/tolak', 'c_veriftransaksi@ditolak');
});







Route::group(['middleware' => ['auth', 'checkRole:petani']], function(){
    Route::get('/petani/dashboard', function () {
        return view('petani.v_Dashboard');
    });
    Route::get('/petani/profil', 'c_profil_petani@klikMenuProfil');
    Route::post('/editProfilPetani', 'c_profil_petani@saveDataPetani');
    Route::get('/petani/list-investor', function (){
        $data_inv = DB::table('ca_investor')->join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->get();
        return view('petani.v_investor',['data'=>$data_inv]);
    });
    Route::get('/petani/pesan', function (){
        $data_inv = DB::table('ca_investor')->join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->get();
        return view('petani.v_pesan',['data'=>$data_inv]);
    });
    Route::get('/petani/pesan/{id}/chat', 'c_dashboard@klikTombolChat');
    Route::post('/kirimpesanpet', 'c_dashboard@setPesan');
    Route::get('/petani/notifikasi', 'c_transaksi@showNotif');
    Route::get('/petani/notifikasi/inves/{id}', 'c_transaksi@showInvestasi');
    Route::get('/buka-inves', 'c_buka_laporan@showForm');
    Route::post('/bukaInves', 'c_buka_laporan@saveDataBukaInvestasi');
    
    Route::post('/postLaporan', 'c_profil_petani@saveDataLaporanHidro');

    Route::get('/petani/data-pengajuan', 'c_profile_petani@showPengajuan');
    Route::get('/petani/data-pengajuan/{id}', 'c_profile_petani@showFormLaporan');

    Route::get('/laba-rugi', 'c_labaRugi@showFormLabaRugi');
    Route::post('/postLaba', 'c_labaRugi@saveDataLabaRugi');

});

// testftp

Route::group(['middleware' => ['auth', 'checkRole:investor']], function(){
    Route::get('/investor/dashboard', function () {
        return view('investor.v_Dashboard');
    });
    Route::get('/investor/list-mitra/detail/{id}', 'c_Mitra@klikMenuMitra');
    Route::get('/investor/list-mitra/detail/{id}/chat', 'c_Mitra@klikTombolChat');
    Route::post('/kirimpesan', 'c_Mitra@setPesan');
    Route::get('/investor/list-mitra/detail/{id}/investasi', 'c_transaksi@showFormInvestasi');
    Route::post('/transaksi', 'c_transaksi@saveTransaction');
    
    Route::get('/investor/profil', 'c_profil_investor@klikMenuProfil');
    Route::post('/editProfil', 'c_profil_investor@saveDataInvestor');
    Route::get('/investor/list-mitra', function (){
        $data_pet = DB::table('ca_farmer')->join('buka_laporan','ca_farmer.id_petani','=','buka_laporan.petani_id')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->get();
        // dd($data_pet);
        return view('investor.v_mitra',['data'=>$data_pet]);
    });
    Route::get('/investor/laporan', 'c_laporan_hidroponik@setDataPetani');
    Route::get('/investor/laporan/{id}', 'c_laporan_hidroponik@setDetailLaporan');

    Route::get('/investor/penilaian', 'c_penilaian@showListDataPetani');
    Route::post('/postRating', 'c_penilaian@saveDataPenilaian');
    Route::post('/editRating', 'c_penilaian@editDataPenilaian');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
