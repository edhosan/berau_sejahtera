@extends('layouts.default')

@section('vendors-script')
  @parent
 <!-- Vendors: Data tables -->
  <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
@endsection

@section('title','Data Master')
@section('subtitle','Manajemen data master agama, pendidikan dalam kk, pendidikan sedang ditempuh, pekerjaan, status kawin, hubungan keluarga, golongan darah, cacat')

@section('content')
<div class="card">	
	<div class="card-header">  
		<h4 class="card-title">Ubah Data Cacat</h4>
	</div>
	<div class="card-block">
	   <div class="container">
            <form action="{{ route('cacat.update', $cacat) }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group row {{ $errors->has('nm_cacat') ? 'has-danger' : '' }}">
                     <label class="col-sm-2 col-form-label">Nama Cacat</label>
                     <div class="col-sm-4">
                        <input type="text" name="nm_cacat" class="form-control {{ $errors->has('nm_cacat') ? 'form-control-danger' : '' }}" value="{{ $cacat->nm_cacat or old('nm_cacat') }}">
                         <i class="form-group__bar"></i>

                     </div>
                     
                    @if($errors->has('nm_cacat'))
                      <div class="form-control-feedback">{{ $errors->first('nm_cacat') }}</div>   
                    @endif          
                 </div>

                 <div class="form-group">
                   <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
                   <a href="{{ route('cacat.index') }}" class="btn btn-secondary waves-effect">Batal</a>
                 </div>
            </form>                 
        </div>
	</div>
</div>
@endsection