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

//Route::get('/', function () {
  //  return view('index');
//});

Route::get('/', 'AuthsController@login')->name('login');
Route::post('/postlogin', 'AuthsController@postlogin');
Route::get('/logout', 'AuthsController@logout');

route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'HalamanController@home');
    Route::get('/dataguru', 'DataguruController@guru');
    Route::get('/dataguru/create', 'DataguruController@panggil');
    Route::post('/dataguru/create', 'DataguruController@create');


    Route::get('/datasekolah', 'SekolahController@index');
    Route::get('/create-sekolah', 'SekolahController@create')->name('create-sekolah');
    Route::post('/simpan-sekolah', 'SekolahController@store')->name('simpan-sekolah');
    
    Route::get('/guru', 'GuruController@index')->name('guru');
    Route::get('/create-guru', 'GuruController@create')->name('create-guru');
    Route::post('/simpan-guru', 'GuruController@store')->name('simpan-guru');

  
  

   

    Route::get('/datasiswa', 'DatasiswaController@siswa');
});


