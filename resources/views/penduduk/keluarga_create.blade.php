@extends('penduduk.layout')

@section('vendor-styles')
 @parent
	<link rel="stylesheet" href="{{ asset('vendors/bower_components/flatpickr/dist/flatpickr.min.css') }}" />
@endsection

@section('vendors-script')
  @parent
  <script src="{{ asset('vendors/bower_components/autosize/dist/autosize.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/flatpickr/dist/flatpickr.min.js') }}"></script>
@endsection

@section('content-penduduk')
 	<form action="" method="post">
	<div class="card">
		<div class="card-header"><h5 class="card-title">Entry Data Keluarga Baru</h5></div>

		<div class="card-block">
		
			     {{ csrf_field() }}

			     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			     	<label class="form-control-label">Kecamatan</label>
			         <div class="select">
                        <select class="form-control">
                            <option>Pilih Kecamatan</option>
                            <option>Tanjung Redeb</option>
                            <option>Gunung Tabur</option>
                            <option>Sambaliung</option>
                            <option>Kelay</option>
                            <option>Segah</option>
                        </select>
                    </div>
			     </div>

			     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			     	<label class="form-control-label">Kampung / Kelurahan</label>
			         <div class="select">
                        <select class="form-control">
                            <option>Pilih Kmapung / Kelurahan</option>
                            <option>Gayam</option>
                            <option>Gunung Panjang</option>
                            <option>Karang Ambun</option>                         
                        </select>
                    </div>
			     </div>

			    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			     	<label class="form-control-label">RW</label>
			         <div class="select">
                        <select class="form-control">
                            <option>Pilih RW</option>
                            <option>-</option>
                            <option>1</option>
                            <option>2</option>                         
                        </select>
                    </div>
			     </div>

			     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			     	<label class="form-control-label">RT</label>
			         <div class="select">
                        <select class="form-control">
                            <option>Pilih RT</option>
                            <option>-</option>
                            <option>001</option>
                            <option>002</option>                         
                        </select>
                    </div>
			     </div>

			     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
			         <label class="form-control-label">Alamat</label>
			         <textarea class="form-control" rows="3"></textarea>
			         <i class="form-group__bar"></i>
			     </div>

			     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
			         <label class="form-control-label">Nomor KK</label>
			         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
			         <i class="form-group__bar"></i>
			     </div>
		  
		</div>
	</div>

	<div class="card">
		<div class="card-header"><h5 class="card-title">Informasi Kepala Keluarga</h5></div>
		<div class="card-block">
		  	<div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Foto</label>
		         <div class="profile__img">
					 <img src="{{ asset('img/profile/2.jpg') }}" alt="" height="42" width="42">		         	
		         </div>					
		     </div>

		     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Upload Foto</label>
		         <input type="file" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		      <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Nama</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">NIK</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		    <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">No. Telepon</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		    <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		        <label class="form-control-label">Jenis Kelamin</label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Laki-Laki
                    </label>
                    <label class="btn">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Perempuan
                    </label>
                </div>
		     </div>

		    <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Tempat Lahir</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Tanggal Lahir</label>
		          <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control datetime-picker" placeholder="Pick a date & time">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
		     </div>

		     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Agama</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Agama</option>
                        <option>Islam</option>
                        <option>Protestan</option>
                        <option>Katolik</option>
                        <option>Budha</option>
                        <option>Hindu</option>
                    </select>
                </div>
		     </div>

		     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Pendidikan dalam KK</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Pendidikan dalam KK</option>
                        <option>Tidak / Belum Sekolah</option>
                        <option>Belum Tamat SD/Sederajat</option>
                        <option>Tamat SD/Sederajat</option>
                        <option>SLTP/Sederajat</option>
                        <option>SLTA/Sederajat</option>
                    </select>
                </div>
		     </div>

		     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Pendidikan sedang ditempuh</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Pendidikan sedang ditempuh</option>
                        <option>Belum Masuk TK/Kelompok Bermain</option>
                        <option>Sedang TK / Kelompok Bermain</option>
                        <option>Tidak Pernah Sekolah</option>
                        <option>Sedang SD/Sederajat</option>
                        <option>Sedang SLTA/Sederajat</option>
                    </select>
                </div>
		     </div>

		    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Pekerjaan</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Pekerjaan</option>
                        <option>Belum / Tidak Bekerja</option>
                        <option>Mengurus Rumah Tangga</option>
                        <option>Pelajar/Mahasiswa</option>
                        <option>Pensiunan</option>
                        <option>Pegawai Negeri Sipil (PNS)</option>
                    </select>
                </div>
		     </div>

		     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Status Kawin</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Status Kawin</option>
                        <option>Belum Kawin</option>
                        <option>Kawin</option>
                        <option>Cerai Hidup</option>
                        <option>Cerai Mati</option>
                        <option>Pegawai Negeri Sipil (PNS)</option>
                    </select>
                </div>
		     </div>

		      <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Hubungan dalam keluarga</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Hubungan dalam keluarga</option>
                        <option>Kepala Keluarga</option>
                    </select>
                </div>
		     </div>

		    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Hubungan dalam keluarga</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Hubungan dalam keluarga</option>
                        <option>Kepala Keluarga</option>
                    </select>
                </div>
		     </div>

		     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">NIK Ayah</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		      <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">NIK Ibu</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		      <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Nama Ayah</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		      <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Nama IBU</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		      <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Golongan Darah</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Golongan Darah</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                        <option>O</option>
                        <option>A+</option>
                    </select>
                </div>
		     </div>

		    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		     	<label class="form-control-label">Cacat</label>
		         <div class="select">
                    <select class="form-control">
                        <option>Pilih Cacat</option>
                        <option>Cacat Fisik</option>
                        <option>Cacat Netra/Buta</option>
                        <option>Cacat Rungu/Wicara</option>
                        <option>Cacat Mental/Jiwa</option>
                        <option>Cacat Fisik dan Mental</option>
                    </select>
                </div>
		     </div>

 			<div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Lokasi Penduduk</label>
		         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
		         <i class="form-group__bar"></i>
		     </div>

		     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		        <label class="form-control-label">Status</label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Aktif
                    </label>
                    <label class="btn">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Tidak Aktif
                    </label>
                </div>
		     </div>

		    

		  	<div class="form-group">
		       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
		       <a href="{{ url('keluarga') }}" class="btn btn-secondary waves-effect">Batal</a>
		    </div>
		</div>
	</div>

 </form>		
@endsection