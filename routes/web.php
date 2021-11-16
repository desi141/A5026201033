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

