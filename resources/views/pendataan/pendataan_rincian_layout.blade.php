@extends('layouts.default')

@section('content')
<header class="content__title">
 <h1>Pendataan Keluarga</h1>
  <small>Pendataan Keluarga berdasarkan subjek pendataan</small> 
</header>

<div class="card">
	<div class="card-header"><h5 class="card-title">Pendataan [Data BDT]</h5></div>

	<div class="card-block">
		<div class="tab-container">
			<ul class="nav nav-tabs" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link {{active(['pendataan/kategori'])}}" href="{{ url('pendataan/kategori') }}" >Kategori Pertanyaan</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link {{active(['pendataan/pertanyaan','pendataan/parameter'])}}" href="{{ url('pendataan/pertanyaan') }}" >Pertanyaan</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link {{active(['pendataan/klasifikasi'])}}" href="{{ url('pendataan/klasifikasi') }}" >Klasifikasi Hasil</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link {{active(['pendataan/periode'])}}" href="{{ url('pendataan/periode') }}">Periode Survey</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link {{active(['pendataan/input'])}}" href="{{ url('pendataan/input') }}" >Input Data</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Laporan Hasil</a>
			  </li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active fade show" role="tabpanel">
					@yield('content-pendataan')					
				</div>
			</div>	
		</div>
		

		
	</div>
</div>
@endsection