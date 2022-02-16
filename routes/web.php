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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'AdminController@dashboard')->name('home');

Auth::routes();

Route::get('dashboard','Admincontroller@dashboard');
Route::get('peminjaman','Admincontroller@peminjaman');
Route::get('buku','Admincontroller@buku');
Route::get('katalog','Admincontroller@katalog');
Route::get('penerbit','Admincontroller@penerbit');
Route::get('pengarang','Admincontroller@pengarang');
Route::get('anggota','Admincontroller@anggota');
Route::get('test_spatie','Admincontroller@test_spatie');

Route::group(['prefix' => 'data'], function () {
	Route::resource('buku', 'BukuController');

	Route::resource('katalog', 'KatalogController');

	Route::resource('penerbit', 'PenerbitController');

	Route::resource('pengarang', 'PengarangController');

	Route::resource('anggota', 'AnggotaController');

	Route::resource('dashboard', 'DashboardController');

	Route::resource('peminjaman', 'PeminjamanController');
});

