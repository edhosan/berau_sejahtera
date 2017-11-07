@extends('layouts.default')

@section('title','Manajemen Penduduk')
@section('subtitle','Manajemen Data Wilayah Administratif')

@section('content')

<div class="card">	
  	<div class="card-header">  
	     <ul class="nav nav-tabs card-header-tabs">
	      <li class="nav-item">
	        <a class="nav-link {{ active(['kecamatan','kecamatan/*']) }}" href="{{ route('kecamatan.index') }}">Wilayah Administratif</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
	       <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
	        <div class="dropdown-menu">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <a class="dropdown-item" href="#">Something else here</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Separated link</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li>
	    </ul>            
	</div>
	
	<div class="card-block">
		@yield('content-penduduk')
	</div>
</div>

@endsection