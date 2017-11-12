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
@section('subtitle','Manajemen data master agama, pendidikan dalam kk, pendidikan sedang ditempuh, pekerjaan, status kawin, hubungan keluarga')

@section('content')
<div class="card">	
	<div class="card-header">  
		<h4 class="card-title">Entry Data Hubungan Keluarga</h4>
	</div>
	<div class="card-block">
	   <div class="container">
            <form action="{{ route('hubungan.store') }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group row {{ $errors->has('nm_hubungan') ? 'has-danger' : '' }}">
                     <label class="col-sm-2 col-form-label">Nama Hubungan Keluarga</label>
                     <div class="col-sm-4">
                        <input type="text" name="nm_hubungan" class="form-control {{ $errors->has('nm_hubungan') ? 'form-control-danger' : '' }}" value="{{ old('nm_hubungan') }}">
                         <i class="form-group__bar"></i>

                     </div>
                     
                    @if($errors->has('nm_hubungan'))
                      <div class="form-control-feedback">{{ $errors->first('nm_hubungan') }}</div>   
                    @endif          
                 </div>

                 <div class="form-group">
                   <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
                   <a href="{{ route('hubungan.index') }}" class="btn btn-secondary waves-effect">Batal</a>
                 </div>
            </form>                 
        </div>
	</div>
</div>
@endsection