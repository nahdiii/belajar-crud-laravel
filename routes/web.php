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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','BerandaController@index')->name('beranda');
Route::get('/data-pegawai','PegawaiController@index')->name('data-pegawai');
Route::get('/create-pegawai','PegawaiController@create')->name('create-pegawai');
Route::post('/simpan-pegawai','PegawaiController@store')->name('simpan-pegawai');
Route::get('/edit-pegawai/{id}','PegawaiController@edit')->name('edit-pegawai');
Route::post('/update-pegawai/{id}','PegawaiController@update')->name('update-pegawai');
Route::get('/delete-pegawai/{id}','PegawaiController@destroy')->name('delete-pegawai');
Route::get('/cetak-pegawai','PegawaiController@cetakPegawai')->name('cetak-pegawai');
Route::get('/cetak-data-pegawai-form','PegawaiController@cetakForm')->name('cetak-data-pegawai-form');
Route::get('/cetak-data-pertanggal/{tglawal}/{tglakhir}','PegawaiController@cetakPegawaiPertanggal')->name('cetak-data-pertanggal');

Route::get('/data-gambar','UploadgambarController@index')->name('data-gambar');
Route::get('/create-gambar','UploadgambarController@create')->name('create-gambar');
Route::post('/simpan-gambar','UploadgambarController@store')->name('simpan-gambar');
Route::get('/edit-gambar/{id}','UploadgambarController@edit')->name('edit-gambar');
Route::post('/update-gambar/{id}','UploadgambarController@update')->name('update-gambar');
Route::get('/delete-gambar/{id}','UploadgambarController@destroy')->name('delete-gambar');


Route::get('/data-unit','UnitController@index')->name('data-unit');
Route::get('/create-unit','UnitController@create')->name('create-unit');
Route::post('/simpan-unit','UnitController@store')->name('simpan-unit');

Route::get('/data-subunit','SubunitController@index')->name('data-subunit');


Route::get('/validasi-pegawai/{id}','PegawaiController@validasi')->name('validasi-pegawai');
// Route::post('/validasikan/{id}','PegawaiController@validasi')->name('validasikan');