@extends('layouts.default')

@section('content')
<header class="content__title">
 <h1>Pendataan Keluarga</h1>
  <small>Pendataan Keluarga berdasarkan subjek pendataan</small> 
</header>

<div class="card">
	<div class="card-header"><h5 class="card-title">Form Master Pendataan</h5></div>

	<div class="card-block">
		<form action="" method="post">
		     {{ csrf_field() }}

		     <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Nama</label>
		         <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'form-control-danger' : '' }}" value="{{ old('name') }}" autofocus>
		         <i class="form-group__bar"></i>
		     </div>

		     <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		        <label class="form-control-label">Subjek</label>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Penduduk
                    </label>
                    <label class="btn">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Keluarga / KK
                    </label>
                    <label class="btn">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Rumah Tangga
                    </label>
                    <label class="btn">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Kelompok Masyarakat
                    </label>
                </div>
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

	        <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
		         <label class="form-control-label">Keterangan</label>
		         <textarea class="form-control" rows="10"></textarea>
		         <i class="form-group__bar"></i>
		     </div>

		     <div class="form-group">
		       <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
		       <a href="{{ url('pendataan') }}" class="btn btn-secondary waves-effect">Batal</a>
		     </div>
	   </form>
	</div>
</div>

 	
@endsection