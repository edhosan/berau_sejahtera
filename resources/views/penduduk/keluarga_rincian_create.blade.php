@extends('penduduk.layout')

@section('content-penduduk')
	<div class="card">
		<div class="card-header"><h5 class="card-title">Entry Data Anggota Keluarga</h5></div>

		<div class="card-block">
		 	<form action="" method="post">
			     {{ csrf_field() }}

			    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			     	<label class="form-control-label">NIK / Nama Penduduk</label>
			         <div class="select">
	                    <select class="form-control">
	                        <option>Pilih Kepala Keluarga</option>
	                        <option>AHLUL</option>
	                        <option>AHYAR</option>
	                        <option>ASHARI</option>
	                    </select>
	                </div>
			     </div>

			      <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			     	<label class="form-control-label">Hubungan</label>
			         <div class="select">
	                    <select class="form-control">
	                        <option>Pilih Hubungan</option>
	                        <option>Suami</option>
	                        <option>Istri</option>
	                        <option>Anak</option>
	                    </select>
	                </div>
			     </div>

			     <div class="form-group">
			       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
			       <a href="{{ url('keluarga/rincian') }}" class="btn btn-secondary waves-effect">Batal</a>
			     </div>
		   </form>		
		</div>
	</div>


@endsection