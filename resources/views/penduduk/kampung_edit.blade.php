@extends('penduduk.layout')

@section('content-penduduk')
	<br>
	<h4 class="card-title">Ubah Data Wilayah Administrasi Kampung (Kecamatan {{ $kecamatan->nm_kecamatan }})</h4>
	<br>
	<div class="container">
		<form action="{{ route('kampung.update', $kecamatan) }}" method="post">
		     {{ csrf_field() }}

			 <input type="hidden" name='wil_kecamatan_id' value="{{ $kecamatan->id }}">
		     <div class="form-group row {{ $errors->has('id') ? 'has-danger' : '' }} ">
		         <label class="col-sm-2 col-form-label">ID</label>
		         <div class="col-sm-4">
			        <input type="text" name="id" class="form-control {{ $errors->has('id') ? 'form-control-danger' : '' }}" value="{{ $kampung->id or old('id') }}" readonly="readonly">
			        <i class="form-group__bar"></i>	       	
		         </div>	      

            	@if($errors->has('id'))
		          <div class="form-control-feedback">{{ $errors->first('id') }}</div>   
	         	@endif    	
		     </div>

		     <div class="form-group row {{ $errors->has('nm_kampung') ? 'has-danger' : '' }}">
		         <label class="col-sm-2 col-form-label">Nama Kampung</label>
		         <div class="col-sm-4">
		         	<input type="text" name="nm_kampung" class="form-control {{ $errors->has('nm_kampung') ? 'form-control-danger' : '' }}" value="{{ $kampung->nm_kampung or old('nm_kampung') }}" autofocus>
		        	 <i class="form-group__bar"></i>

		         </div>
		         
		       	@if($errors->has('nm_kampung'))
		          <div class="form-control-feedback">{{ $errors->first('nm_kampung') }}</div>   
	         	@endif    		
		     </div>

		     <div class="form-group">
		       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
		       <a href="{{ route('kampung.index', $kecamatan) }}" class="btn btn-secondary waves-effect">Batal</a>
		     </div>
	   	</form>					
	</div>

@endsection