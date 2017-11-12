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
@section('subtitle','Manajemen data master agama, pendidikan dalam kk, pendidikan sedang ditempuh, pekerjaan, status kawin')

@section('content')
<div class="card">	
	<div class="card-header">  
		<h4 class="card-title">Ubah Data Status Kawin</h4>
	</div>
	<div class="card-block">
	   <div class="container">
            <form action="{{ route('status.update', $status) }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group row {{ $errors->has('nm_status_kawin') ? 'has-danger' : '' }}">
                     <label class="col-sm-2 col-form-label">Nama Status Kawin</label>
                     <div class="col-sm-4">
                        <input type="text" name="nm_status_kawin" class="form-control {{ $errors->has('nm_status_kawin') ? 'form-control-danger' : '' }}" value="{{ $status->nm_status_kawin or old('nm_status_kawin') }}">
                         <i class="form-group__bar"></i>

                     </div>
                     
                    @if($errors->has('nm_status_kawin'))
                      <div class="form-control-feedback">{{ $errors->first('nm_status_kawin') }}</div>   
                    @endif          
                 </div>

                 <div class="form-group">
                   <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
                   <a href="{{ route('status.index') }}" class="btn btn-secondary waves-effect">Batal</a>
                 </div>
            </form>                 
        </div>
	</div>
</div>
@endsection