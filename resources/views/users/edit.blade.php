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
    <h2 class="card-title">Manajemen User</h2>
    <small class="card-subtitle">Create, update & delete users list</small>
  </div>
  <div class="card-block">
    <div class="tab-container">
      <ul class="nav nav-tabs" role="tablist">
           <li class="nav-item">
               <a class="nav-link" href="{{ route('users.index') }}" role="tab">Daftar User</a>
           </li>
           <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#" role="tab">Ubah Data User</a>
           </li>
       </ul>
       <div class="tab-content">
         <div class="tab-pane active fade show" role="tabpanel">
           <div class="card">
             <div class="card-block">
               <form action="{{ route('users.update', $user) }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
                     <label class="form-control-label">Nama</label>
                     <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'form-control-danger' : '' }}" value="{{ $user->name or old('name') }}" autofocus>
                     <i class="form-group__bar"></i>
                 </div>

                 <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                     <label class="form-control-label">Email</label>
                     <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'form-control-danger' : '' }}" value="{{ $user->email or old('email') }}">
                     <i class="form-group__bar"></i>
                 </div>

                 <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                     <label class="form-control-label">Password</label>
                     <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}" value="{{ old('password') }}">
                     <i class="form-group__bar"></i>
                 </div>

                 <div class="form-group">
                     <label class="form-control-label">Konfirmasi Password</label>
                     <input type="password" name="password_confirmation" class="form-control" value="{{  old('password_confirmation') }}">
                     <i class="form-group__bar"></i>
                 </div>

                  <div class="form-group">
                    <label>Tipe User</label>
                    <?php $selected_data = isset($user)?$user->roles()->pluck('id'):old('roles') ?>
                    {{ Form::select('roles[]', $role, $selected_data, ['class' => "select2", 'multiple' => 'multiple', 'data-placeholder' => 'Select one or more choices']) }}
                </div>

                 <div class="form-group">
                   <button type="submit" name="button" class="btn btn-success waves-effect">Simpan</button>
                   <a href="{{ route('users.index') }}" class="btn btn-secondary waves-effect">Batal</a>
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
