@extends('penduduk.layout')

@section('content-penduduk')
	<div class="card">
		<div class="card-header"><h5 class="card-title">Entry Data Kaluarga</h5></div>

		<div class="card-block">
		 	<form action="" method="post">
			     {{ csrf_field() }}

			    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			     	<label class="form-control-label">NIK Kepala Keluarga</label>
			         <div class="select">
	                    <select class="form-control">
	                        <option>Pilih Kepala Keluarga</option>
	                        <option>AHLUL</option>
	                        <option>AHYAR</option>
	                        <option>ASHARI</option>
	                    </select>
	                </div>
			     </div>

			     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
			         <label class="form-control-label">Nomor KK</label>
			         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
			         <i class="form-group__bar"></i>
			     </div>

			     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
			         <label class="form-control-label">Nama Kepala Camat</label>
			         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
			         <i class="form-group__bar"></i>
			     </div>

			     <div class="form-group">
			       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
			       <a href="{{ url('keluarga') }}" class="btn btn-secondary waves-effect">Batal</a>
			     </div>
		   </form>		
		</div>
	</div>


@endsection