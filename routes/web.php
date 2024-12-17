<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\DosenController;

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
    // return view('welcome');
});


Route::get('pages/blog', function () {
    return view('pages/blog');
});

Route::get('pages/blog-details', function () {
    return view('pages/blog-details');
});

Route::get('pages/contact', function () {
    return view('pages/contact');
});

Route::get('pages/privacy-policy', function () {
    return view('pages/privacy-policy');
});

Route::get('pages/product-details', function () {
    return view('pages/product-details');
});

Route::get('pages/products', function () {
    return view('pages/products');
});

Route::get('pages/terms-conditions', function () {
    return view('pages/terms-conditions');
});

Route::get('error', function () {
    return "<h1>Server Error : Ada kesalahan di server</h1>";
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

Route::get('/modem','App\Http\Controllers\ModemController@index');
Route::get('/modem/tambahModem','App\Http\Controllers\ModemController@tambah');
Route::post('/modem/store','App\Http\Controllers\ModemController@store');
Route::post('/modem/update','App\Http\Controllers\ModemController@update');
Route::get('/modem/editModem/{id}','App\Http\Controllers\ModemController@edit');
Route::get('/modem/hapus/{id}','App\Http\Controllers\ModemController@hapus');
Route::get('/modem/cari','App\Http\Controllers\ModemController@cari');

Route::get('/counter','App\Http\Controllers\CounterController@index');
Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');

Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah', 'App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store', 'App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}', 'App\Http\Controllers\KaryawanController@hapus');
Route::post('/karyawan/update', 'App\Http\Controllers\KaryawanController@update');
