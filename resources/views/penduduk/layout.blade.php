@extends('layouts.default')

@section('content')
<header class="content__title">
 <h1>Kependudukan</h1>
  <small>Manajemen Data Wilayah Administratif</small> 
</header>

<div class="card">
  	<div class="card-header">  
	     <ul class="nav nav-tabs card-header-tabs">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Active</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
	       <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
	        <div class="dropdown-menu">
	          <a class="dropdown-item active" href="#">Action</a>
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