@extends('layouts.default')
@section('content')
<div class="card">
  <div class="card-header">
    <h2 class="card-title">Hak Akses User [{{ $hakakses->name }}]</h2>
    <small class="card-subtitle">Create, update & delete hak akses user</small>
  </div>
  <div class="card-block">
    <div class="tab-container">
      <ul class="nav nav-tabs" role="tablist">
           <li class="nav-item">
               <a class="nav-link" href="{{ route('hak_akses') }}" role="tab">Daftar Hak Akses</a>
           </li>
           <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#" role="tab">Tambah data Hak Akses User</a>
           </li>
       </ul>
       <div class="tab-content">
         <div class="tab-pane active fade show" role="tabpanel">
           <div class="card">
             <div class="card-block">
               <form action="{{ route('hak_akses.update', $hakakses) }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
                     <label class="form-control-label">Nama</label>
                     <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'form-control-danger' : '' }}" value="{{ $hakakses->name or old('name') }}" autofocus>
                     <i class="form-group__bar"></i>
                 </div>

                 <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
                     <label class="form-control-label">Guard Name</label>
                     <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ $hakakses->guard_name or old('guard_name') }}">
                     <i class="form-group__bar"></i>
                 </div>

                 <div class="form-group">
                   <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
                   <a href="{{ route('hak_akses') }}" class="btn btn-secondary waves-effect">Batal</a>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
    </div>
  </div>
</div>

@endsection
