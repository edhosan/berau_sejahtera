@extends('penduduk.layout')

@section('content-penduduk')
	<div class="card">
		<div class="card-header"><h5 class="card-title">Entry Data Wilayah Administrasi RW</h5></div>
		<div class="card-block">
			<form action="" method="post">
			     {{ csrf_field() }}

			     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
			         <label class="form-control-label">ID</label>
			         <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'form-control-danger' : '' }}" value="{{ old('name') }}" autofocus>
			         <i class="form-group__bar"></i>
			     </div>

			     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
			         <label class="form-control-label">RW</label>
			         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
			         <i class="form-group__bar"></i>
			     </div>

			     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
			         <label class="form-control-label">Nama Ketua RW</label>
			         <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ old('guard_name') }}">
			         <i class="form-group__bar"></i>
			     </div>

			     <div class="form-group">
			       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
			       <a href="{{ url('rw') }}" class="btn btn-secondary waves-effect">Batal</a>
			     </div>
		   </form>
		</div>
	</div>

 	
@endsection