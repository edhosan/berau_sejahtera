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
});
