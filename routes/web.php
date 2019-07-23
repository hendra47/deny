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
  return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'userController');

Route::resource('siswas', 'siswaController');

Route::resource('hakAkses', 'hakAksesController');

Route::resource('kriterias', 'kriteriaController');

Route::get('crips-new/{id}', ['as' => 'cripsNew', 'uses' => 'cripsController@CreateNew']);
Route::get('input-nilai/{id}/{kode}/{kriteria}/{kode_kriteria}', ['as' => 'inputNilai', 'uses' => 'nilai_alternatifController@inputNilai']);

Route::get('ajax/{nilai}/{kode}/{id}', ['as' => 'ajax', 'uses' => 'nilai_alternatifController@ajax']);



Route::get('laporan/{id}', ['as' => 'lap', 'uses' => 'lapController@index']);

Route::resource('crips', 'cripsController');

Route::resource('alternatifs', 'alternatifController');

Route::resource('nilaiAlternatifs', 'nilai_alternatifController');