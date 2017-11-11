@extends('penduduk.layout')

@section('content-penduduk')
	<br>
	<h4 class="card-title">Ubah Data Wilayah Administrasi RW (Kampung {{ $kampung->nm_kampung }})</h4>
	<br>
	<div class="container">
		<form action="{{ route('rw.update', [$kecamatan, $kampung->id, $rw->id]) }}" method="post">
		     {{ csrf_field() }}

			 <input type="hidden" name='wil_kecamatan_id' value="{{ $kecamatan->id }}">
 			 <input type="hidden" name='wil_kampung_id' value="{{ $kampung->id }}">
		     <div class="form-group row {{ $errors->has('id') ? 'has-danger' : '' }} ">
		         <label class="col-sm-2 col-form-label">ID</label>
		         <div class="col-sm-4">
			        <input type="text" name="id" class="form-control {{ $errors->has('id') ? 'form-control-danger' : '' }}" value="{{ $rw->id or old('id') }}" readonly="readonly">
			        <i class="form-group__bar"></i>	       	
		         </div>	      

            	@if($errors->has('id'))
		          <div class="form-control-feedback">{{ $errors->first('id') }}</div>   
	         	@endif    	
		     </div>

		     <div class="form-group row {{ $errors->has('rw') ? 'has-danger' : '' }}">
		         <label class="col-sm-2 col-form-label">RW</label>
		         <div class="col-sm-4">
		         	<input type="text" name="rw" class="form-control {{ $errors->has('rw') ? 'form-control-danger' : '' }}" value="{{ $rw->rw or old('rw') }}" autofocus>
		        	 <i class="form-group__bar"></i>

		         </div>
		         
		       	@if($errors->has('rw'))
		          <div class="form-control-feedback">{{ $errors->first('rw') }}</div>   
	         	@endif    		
		     </div>

		     <div class="form-group">
		       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
		       <a href="{{ route('rw.index', [$kecamatan, $kampung->id]) }}" class="btn btn-secondary waves-effect">Batal</a>
		     </div>
	   	</form>					
	</div>

@endsection