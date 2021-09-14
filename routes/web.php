<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Route::prefix('admin')->namespace('Admin')
->middleware('auth', 'admin')
->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard.admin');
    Route::resource('manage_user', 'ManageUserController');
    Route::resource('jurusan', 'JurusanController');
    Route::resource('tahun', 'TahunController');
    Route::resource('semester', 'SemesterController');
    Route::resource('mahasiswa', 'MahasiswaController');
    Route::resource('perpanjangan', 'PerpanjanganController');
    Route::resource('perhitungan', 'PerhitunganController');
    Route::resource('dataaset', 'DatasetController');
    Route::resource('datauji', 'DataUjiController');

    // kakulasi
    Route::get('/kakulasi/index', 'KakulasiController@index')->name('kakulasi.index');
    Route::get('/kakulasi/create', 'KakulasiController@halaman_input')->name('kakulasi.input');
    Route::post('/kakulasi/tambahkakulasi', 'KakulasiController@tambah_kakulasi')->name('kakulasi.tambah_kakulasi');
    // Route::post('/kakulasi/perhitugan/{id}', 'KakulasiController@perhitungan')->name('kakulasi.perhitungan');

    // perhitugan jarak
Route::post('/proses/perhitungan/{id}', 'ProsesPerhitunganContoller@peroses')->name('proses.perhitungan');


});

Route::prefix('mahasiswa')->namespace('Mahasiswa')
->middleware('auth')
->group(function(){
    Route::get('/', 'DashboardController@dashboard_mahasiswa')->name('dashboard.mahasiswa');
    Route::get('/datadiri', 'DataDiriController@index')->name('datadiri.mahasiswa');

    // perpanjangan
    Route::get('/halamaninputperpanjangan', 'PerpanjanganController@halaman_input')->name('input.perpanjangan');
    Route::post('/prosesinputperpanjangan', 'PerpanjanganController@proses_perpanjangan')->name('proses.perpanjangan');
    Route::get('/halaman/dataperpanjangan', 'PerpanjanganController@data_perpanjangan_beasiswa')->name('dataperpanjangan');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
