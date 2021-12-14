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

Route::get('jqueryslide', function () {
    return view('customjquery');
});

Route::get('praktikumdua', function () {
    return view('praktikum2');
});

Route::get('isiannama',"ViewController@showForm") ;
Route::post('greetings',"ViewController@resultGreetings");

Route::get('ets',"ViewController@showEts") ;

Route::get('tugasphp',"ViewController@showDigit") ;
Route::post('digitofsum',"ViewController@resultDigit");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route Tugas CRUD
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route praktikum
Route::get('/masker','MaskerController@index');
Route::get('/masker/tambah','MaskerController@tambah');
Route::post('/masker/store','MaskerController@store');
Route::get('/masker/edit/{id}','MaskerController@edit');
Route::post('/masker/update','MaskerController@update');
Route::get('/masker/hapus/{id}','MaskerController@hapus');
Route::get('/masker/cari','MaskerController@cari');
Route::get('/masker/view/{id}','MaskerController@detail');
