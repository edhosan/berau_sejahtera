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
	Route::get('/kecamatan/rt/delete','Penduduk\WilayahController@deleteRT')->name('rt.delete');

	Route::get('/datamaster/agama','DataMasterController@listAgama')->name('agama.index');
	Route::get('/datamaster/agama/create','DataMasterController@createAgama')->name('agama.create');
	Route::post('/datamaster/agama/store','DataMasterController@storeAgama')->name('agama.store');
	Route::get('/datamaster/agama/{agama}/edit','DataMasterController@editAgama')->name('agama.edit');
	Route::post('/datamaster/agama/{agama}/update','DataMasterController@updateAgama')->name('agama.update');
	Route::get('/datamaster/agama/delete','DataMasterController@deleteAgama')->name('agama.delete');
	Route::get('/datamaster/pendidikankk','DataMasterController@listPendidikanKK')->name('pendidikankk.index');
	Route::get('/datamaster/pendidikankk/create','DataMasterController@createPendidikanKK')->name('pendidikankk.create');
	Route::post('/datamaster/pendidikankk/store','DataMasterController@storePendidikanKK')->name('pendidikankk.store');
	Route::get('/datamaster/pendidikankk/{pendidikankk}/edit','DataMasterController@editPendidikanKK')->name('pendidikankk.edit');
	Route::post('/datamaster/pendidikankk/{pendidikankk}/update','DataMasterController@updatePendidikanKK')->name('pendidikankk.update');
	Route::get('/datamaster/pendidikankk/delete','DataMasterController@deletePendidikanKK')->name('pendidikankk.delete');
	Route::get('/datamaster/pendidikan_ditempuh','DataMasterController@listPendidikanDitempuh')->name('pendidikan_ditempuh.index');
	Route::get('/datamaster/pendidikan_ditempuh/create','DataMasterController@createPendidikanDitempuh')->name('pendidikan_ditempuh.create');
	Route::post('/datamaster/pendidikan_ditempuh/store','DataMasterController@storePendidikanDitempuh')->name('pendidikan_ditempuh.store');
	Route::get('/datamaster/pendidikan_ditempuh/{pendidikanditempuh}/edit','DataMasterController@editPendidikanDitempuh')->name('pendidikan_ditempuh.edit');
	Route::post('/datamaster/pendidikan_ditempuh/{pendidikanditempuh}/update','DataMasterController@updatePendidikanDitempuh')->name('pendidikan_ditempuh.update');
	Route::get('/datamaster/pendidikan_ditempuh/delete','DataMasterController@deletePendidikanDitempuh')->name('pendidikan_ditempuh.delete');
	Route::get('/datamaster/pekerjaan','DataMasterController@listPekerjaan')->name('pekerjaan.index');
	Route::get('/datamaster/pekerjaan/create','DataMasterController@createPekerjaan')->name('pekerjaan.create');
	Route::post('/datamaster/pekerjaan/store','DataMasterController@storePekerjaan')->name('pekerjaan.store');
	Route::get('/datamaster/pekerjaan/{pekerjaan}/edit','DataMasterController@editPekerjaan')->name('pekerjaan.edit');
	Route::post('/datamaster/pekerjaan/{pekerjaan}/update','DataMasterController@updatePekerjaan')->name('pekerjaan.update');
	Route::get('/datamaster/pekerjaan/delete','DataMasterController@deletePekerjaan')->name('pekerjaan.delete');
	Route::get('/datamaster/status','DataMasterController@listStatus')->name('status.index');
	Route::get('/datamaster/status/create','DataMasterController@createStatus')->name('status.create');
	Route::post('/datamaster/status/store','DataMasterController@storeStatus')->name('status.store');
	Route::get('/datamaster/status/{status}/edit','DataMasterController@editStatus')->name('status.edit');
	Route::post('/datamaster/status/{status}/update','DataMasterController@updateStatus')->name('status.update');
	Route::get('/datamaster/status/delete','DataMasterController@deleteStatus')->name('status.delete');
	Route::get('/datamaster/hubungan','DataMasterController@listHubungan')->name('hubungan.index');
	Route::get('/datamaster/hubungan/create','DataMasterController@createHubungan')->name('hubungan.create');
	Route::post('/datamaster/hubungan/store','DataMasterController@storeHubungan')->name('hubungan.store');
	Route::get('/datamaster/hubungan/{hubungan}/edit','DataMasterController@editHubungan')->name('hubungan.edit');
	Route::post('/datamaster/hubungan/{hubungan}/update','DataMasterController@updateHubungan')->name('hubungan.update');
	Route::get('/datamaster/hubungan/delete','DataMasterController@deleteHubungan')->name('hubungan.delete');
	Route::get('/datamaster/golongan','DataMasterController@listGolongan')->name('golongan.index');
	Route::get('/datamaster/golongan/create','DataMasterController@createGolongan')->name('golongan.create');
	Route::post('/datamaster/golongan/store','DataMasterController@storeGolongan')->name('golongan.store');
	Route::get('/datamaster/golongan/{golongan}/edit','DataMasterController@editGolongan')->name('golongan.edit');
	Route::post('/datamaster/golongan/{golongan}/update','DataMasterController@updateGolongan')->name('golongan.update');
	Route::get('/datamaster/golongan/delete','DataMasterController@deleteGolongan')->name('golongan.delete');
	Route::get('/datamaster/cacat','DataMasterController@listCacat')->name('cacat.index');
	Route::get('/datamaster/cacat/create','DataMasterController@createCacat')->name('cacat.create');
	Route::post('/datamaster/cacat/store','DataMasterController@storeCacat')->name('cacat.store');
	Route::get('/datamaster/cacat/{cacat}/edit','DataMasterController@editCacat')->name('cacat.edit');
	Route::post('/datamaster/cacat/{cacat}/update','DataMasterController@updateCacat')->name('cacat.update');
	Route::get('/datamaster/cacat/delete','DataMasterController@deleteCacat')->name('cacat.delete');
	Route::get('/datamaster/akseptor','DataMasterController@listAkseptor')->name('akseptor.index');
	Route::get('/datamaster/akseptor/create','DataMasterController@createAkseptor')->name('akseptor.create');
	Route::post('/datamaster/akseptor/store','DataMasterController@storeAkseptor')->name('akseptor.store');
	Route::get('/datamaster/akseptor/{akseptor}/edit','DataMasterController@editAkseptor')->name('akseptor.edit');
	Route::post('/datamaster/akseptor/{akseptor}/update','DataMasterController@updateAkseptor')->name('akseptor.update');
	Route::get('/datamaster/akseptor/delete','DataMasterController@deleteAkseptor')->name('akseptor.delete');



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
