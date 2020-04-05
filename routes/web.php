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

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
    Route::resource('/siswa', 'SiswaController');
    Route::get("/siswa/{id}/delete", 'SiswaController@delete')->name("siswa.hapus");
    Route::get('/', 'HomeController@index')->name('home');

});
