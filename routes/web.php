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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware'=> ['auth']], function(){
Route::get('/dashboard','DashboardController@index');
Route::get('/riwayat','RiwayatController@index');
Route::get('/datasiswa', 'SiswaController@index');
Route::post('/datasiswa/create','SiswaController@create');
Route::get('/datasiswa/{id}/delete', 'SiswaController@delete');
});
