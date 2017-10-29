@extends('layouts.default')

@section('vendor-styles')
  @parent
  <link rel="stylesheet" href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('vendors-script')
  @parent
 <!-- Vendors: Select2 -->
  <script src="{{ asset('vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h2 class="card-title">Tipe User [{{ $role->name }}]</h2>
    <small class="card-subtitle">Create, update & delete tipe user</small>
  </div>
  <div class="card-block">
    <div class="tab-container">
      <ul class="nav nav-tabs" role="tablist">
           <li class="nav-item">
               <a class="nav-link" href="{{ route('roles.index') }}" role="tab">Daftar Tipe User</a>
           </li>
           <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#" role="tab">Ubah data Tipe User</a>
           </li>
       </ul>
       <div class="tab-content">
         <div class="tab-pane active fade show" role="tabpanel">
           <div class="card">
             <div class="card-block">
               <form action="{{ route('roles.update', $role) }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
                     <label class="form-control-label">Nama</label>
                     <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'form-control-danger' : '' }}" value="{{ $role->name or old('name') }}" autofocus>
                     <i class="form-group__bar"></i>
                 </div>

                 <div class="form-group {{ $errors->has('guard_name') ? 'has-danger' : '' }}">
                     <label class="form-control-label">Guard Name</label>
                     <input type="text" name="guard_name" class="form-control {{ $errors->has('guard_name') ? 'form-control-danger' : '' }}" value="{{ $role->guard_name or old('guard_name') }}">
                     <i class="form-group__bar"></i>
                 </div>

                  <div class="form-group {{ $errors->has('hak_akses') ? 'has-danger' : '' }}">
                    <label>Hak Akses</label>

                    <?php $selected_data = isset($role)?$role->permissions()->pluck('id'):old('hak_akses') ?>
                    {{ Form::select('hak_akses[]', $hak_akses, $selected_data, ['class' => "select2", 'multiple' => 'multiple', 'data-placeholder' => 'Select one or more choices']) }}
                </div>

                 <div class="form-group">
                   <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
                   <a href="{{ route('roles.index') }}" class="btn btn-secondary waves-effect">Batal</a>
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
