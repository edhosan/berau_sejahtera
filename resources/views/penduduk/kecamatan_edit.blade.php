@extends('penduduk.layout')

@section('content-penduduk')
	<br>
	<h4 class="card-title">Ubah Data Kecamatan {{ $kecamatan->nm_kecamatan }}</h4>
	<br>
	<div class="container">
		<form action="{{ route('kecamatan.update', $kecamatan) }}" method="post">
		     {{ csrf_field() }}

		     <div class="form-group row {{ $errors->has('id') ? 'has-danger' : '' }} ">
		         <label class="col-sm-2 col-form-label">ID</label>
		         <div class="col-sm-4">
			        <input type="text" name="id" class="form-control {{ $errors->has('id') ? 'form-control-danger' : '' }}" value="{{ $kecamatan->id or old('id') }}" readonly="readonly">
			        <i class="form-group__bar"></i>	       	
		         </div>	      

            	@if($errors->has('id'))
		          <div class="form-control-feedback">{{ $errors->first('id') }}</div>   
	         	@endif    	
		     </div>

		     <div class="form-group row {{ $errors->has('nm_kecamatan') ? 'has-danger' : '' }}">
		         <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
		         <div class="col-sm-4">
		         	<input type="text" name="nm_kecamatan" class="form-control {{ $errors->has('nm_kecamatan') ? 'form-control-danger' : '' }}" value="{{ $kecamatan->nm_kecamatan or old('nm_kecamatan') }}" autofocus>
		        	 <i class="form-group__bar"></i>

		         </div>
		         
		       	@if($errors->has('nm_kecamatan'))
		          <div class="form-control-feedback">{{ $errors->first('nm_kecamatan') }}</div>   
	         	@endif    		
		     </div>

		     <div class="form-group">
		       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
		       <a href="{{ url('kecamatan') }}" class="btn btn-secondary waves-effect">Batal</a>
		     </div>
	   	</form>					
	</div>

@endsection