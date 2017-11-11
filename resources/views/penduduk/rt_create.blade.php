@extends('penduduk.layout')

@section('content-penduduk')
	<br>
	<h4 class="card-title">Entry Data Wilayah Administrasi RT (RW {{ $rw->rw }})</h4>
	<br>
	<div class="container">
		<form action="{{ route('rt.store', [$kecamatan, $kampung->id, $rw->id]) }}" method="post">
		     {{ csrf_field() }}

			 <input type="hidden" name='wil_kecamatan_id' value="{{ $kecamatan->id }}">
 			 <input type="hidden" name='wil_kampung_id' value="{{ $kampung->id }}">
  			 <input type="hidden" name='wil_rw_id' value="{{ $rw->id }}">
		     <div class="form-group row {{ $errors->has('id') ? 'has-danger' : '' }} ">
		         <label class="col-sm-2 col-form-label">ID</label>
		         <div class="col-sm-4">
			        <input type="text" name="id" class="form-control {{ $errors->has('id') ? 'form-control-danger' : '' }}" value="{{ old('id') }}" autofocus>
			        <i class="form-group__bar"></i>	       	
		         </div>	      

            	@if($errors->has('id'))
		          <div class="form-control-feedback">{{ $errors->first('id') }}</div>   
	         	@endif    	
		     </div>

		     <div class="form-group row {{ $errors->has('rt') ? 'has-danger' : '' }}">
		         <label class="col-sm-2 col-form-label">RT</label>
		         <div class="col-sm-4">
		         	<input type="text" name="rt" class="form-control {{ $errors->has('rt') ? 'form-control-danger' : '' }}" value="{{ old('rt') }}">
		        	 <i class="form-group__bar"></i>

		         </div>
		         
		       	@if($errors->has('rt'))
		          <div class="form-control-feedback">{{ $errors->first('rt') }}</div>   
	         	@endif    		
		     </div>

		     <div class="form-group">
		       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
		       <a href="{{ route('rt.index', [$kecamatan, $kampung->id, $rw->id]) }}" class="btn btn-secondary waves-effect">Batal</a>
		     </div>
	   	</form>					
	</div>

@endsection