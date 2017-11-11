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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/users','UsersController@index')->name('users.index');
	Route::get('/users/{user}/edit','UsersController@edit')->name('users.edit');
	Route::post('/users/{user}','UsersController@update')->name('users.update');
	Route::get('/users/delete','UsersController@delete')->name('users.delete');

	Route::get('/roles/index','Admin\RoleController@index')->name('roles.index');
	Route::get('/roles','Admin\RoleController@create')->name('roles');
	Route::post('/roles','Admin\RoleController@store')->name('roles.store');
	Route::get('/roles/{role}/edit','Admin\RoleController@edit')->name('roles.edit');
	Route::post('/roles/{role}','Admin\RoleController@update')->name('roles.update');
	Route::get('/roles/delete','Admin\RoleController@delete')->name('roles.delete');

	Route::get('/hak_akses','Admin\HakAksesController@index')->name('hak_akses');
	Route::get('/hak_akses/create','Admin\HakAksesController@create')->name('hak_akses.create');
	Route::post('/hak_akses','Admin\HakAksesController@store')->name('hak_akses.store');
	Route::get('/hak_akses/{hak_akses}/edit','Admin\HakAksesController@edit')->name('hak_akses.edit');
	Route::post('/hak_akses/{hak_akses}','Admin\HakAksesController@update')->name('hak_akses.update');
	Route::get('/hak_akses/delete','Admin\HakAksesController@delete')->name('hak_akses.delete');

	Route::get('/kecamatan','Penduduk\WilayahController@index')->name('kecamatan.index');
	Route::get('/kecamatan/create','Penduduk\WilayahController@createKecamatan')->name('kecamatan.create');
	Route::post('/kecamatan/store','Penduduk\WilayahController@storeKecamatan')->name('kecamatan.store');
	Route::get('/kecamatan/{kecamatan}/edit','Penduduk\WilayahController@editKecamatan')->name('kecamatan.edit');
	Route::post('/kecamatan/{kecamatan}','Penduduk\WilayahController@updateKecamatan')->name('kecamatan.update');
	route::get('/kecamatan/delete','Penduduk\WilayahController@deleteKecamatan')->name('kecamatan.delete');
	Route::get('/kecamatan/{kecamatan}/kampung','Penduduk\WilayahController@listKampung')->name('kampung.index');
	Route::get('/kecamatan/{kecamatan}/kampung/create','Penduduk\WilayahController@createKampung')->name('kampung.create');
	Route::post('/kecamatan/{kecamatan}/kampung/store','Penduduk\WilayahController@storeKampung')->name('kampung.store');
	Route::get('/kecamatan/{kecamatan}/kampung/{id}/edit','Penduduk\WilayahController@editKampung')->name('kampung.edit');
	Route::post('/kecamatan/{kecamatan}/kampung','Penduduk\WilayahController@updateKampung')->name('kampung.update');
	route::get('/kecamatan/kampung/delete','Penduduk\WilayahController@deleteKampung')->name('kampung.delete');
	Route::get('/kecamatan/{kecamatan}/{wil_kampung_id}/rw','Penduduk\WilayahController@listRw')->name('rw.index');
	Route::get('/kecamatan/{kecamatan}/{wil_kampung_id}/rw/create','Penduduk\WilayahController@createRW')->name('rw.create');
	Route::post('/kecamatan/{kecamatan}/{wil_kampung_id}/rw/store','Penduduk\WilayahController@storeRW')->name('rw.store');
	Route::get('/kecamatan/{kecamatan}/{wil_kampung_id}/rw/{id}/edit','Penduduk\WilayahController@editRW')->name('rw.edit');
	Route::post('/kecamatan/{kecamatan}/{wil_kampung_id}/rw/{id}/update','Penduduk\WilayahController@updateRw')->name('rw.update');
	route::get('/kecamatan/rw/delete','Penduduk\WilayahController@deleteRw')->name('rw.delete');
	Route::get('/kecamatan/{kecamatan}/{wil_kampung_id}/{wil_rw_id}/rt','Penduduk\WilayahController@listRT')->name('rt.index');
	Route::get('/kecamatan/{kecamatan}/{wil_kampung_id}/{wil_rw_id}/rt/create','Penduduk\WilayahController@createRT')->name('rt.create');
	Route::post('/kecamatan/{kecamatan}/{wil_kampung_id}/{wil_rw_id}/rt/store','Penduduk\WilayahController@storeRT')->name('rt.store');
	Route::get('/kecamatan/{kecamatan}/{wil_kampung_id}/{wil_rw_id}/rt/{id}/edit','Penduduk\WilayahController@editRT')->name('rt.edit');
	Route::post('/kecamatan/{kecamatan}/{wil_kampung_id}/{wil_rw_id}/rt/{id}/update','Penduduk\WilayahController@updateRT')->name('rt.update');
	route::get('/kecamatan/rt/delete','Penduduk\WilayahController@deleteRT')->name('rt.delete');


	Route::view('/calendar','include.calendar');		
	Route::view('/rt','penduduk.rt');
	Route::view('/rt/create','penduduk.rt_create');
	Route::view('/keluarga','penduduk.keluarga');
	Route::view('/keluarga/create','penduduk.keluarga_create');
	Route::view('/keluarga/create/old','penduduk.keluarga_create_old');
	Route::view('/keluarga/rincian','penduduk.keluarga_rincian');
	Route::view('/keluarga/rincian/create','penduduk.keluarga_rincian_create');
	Route::view('/penduduk','penduduk.penduduk');
	Route::view('/penduduk/create','penduduk.penduduk_create');
	Route::view('/rumah_tangga','penduduk.rumah_tangga');
	Route::view('/kelompok','penduduk.kelompok');
	Route::view('/pendataan','pendataan.pendataan');
	Route::view('/pendataan/create','pendataan.pendataan_create');
	Route::view('/pendataan/kategori','pendataan.kategori_pertanyaan');
	Route::view('/pendataan/pertanyaan','pendataan.pertanyaan');
	Route::view('/pendataan/parameter','pendataan.parameter');
	Route::view('/pendataan/klasifikasi','pendataan.klasifikasi');
	Route::view('/pendataan/periode','pendataan.periode');
	Route::view('/pendataan/input','pendataan.input');
});
