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

Route::get('/', 'LandingController@index');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fishopedia', 'FishopediaController@index')->name('fishopedia');
Route::get('/profile', 'ProfileController@show')->name('profile');
Route::post('/profile/update', 'ProfileController@update');
Route::post('/tambah/ikan', 'HomeController@tambahIkan');
Route::post('/buang/ikan', 'HomeController@buangIkan');
Route::post('/tambah/makanan', 'HomeController@tambahPakan');
Route::post('/ganti/air', 'HomeController@gantiAir');
Route::post('/ekosistem/buat', 'HomeController@tambahEkosistem');
Route::get('/ekosistem/buat', 'HomeController@index')->name('home');
Route::get('/fishopedia/ikan/{id}', 'FishopediaController@detail');
Route::post('/clear/ekosistem', 'HomeController@clearEkosistem');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
