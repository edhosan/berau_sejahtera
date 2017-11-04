@extends('layouts.default')

@section('content')
<header class="content__title">
 <h1>Kependudukan</h1>
  <small>Entry, ubah, & hapus data wilayah, keluarga, penduduk, rumah tangga dan keluarga</small> 
</header>

<div class="toolbar">
  <nav class="toolbar__nav">
    <a class="nav-link {{ active(['kecamatan','kecamatan/create','kampung','kampung/create','rw','rw/create','rt','rt/create']) }}" href="{{ url('kecamatan') }}">Wilayah Administrasi</a>    
    <a class="nav-link {{ active(['keluarga','keluarga/create','keluarga/create/old','keluarga/rincian','keluarga/rincian/create']) }}" href="{{ url('keluarga') }}">Keluarga</a>
    <a class="nav-link {{ active(['penduduk','penduduk/create']) }}" href="{{ url('penduduk') }}">Penduduk</a>
    <a class="nav-link {{ active(['rumah_tangga']) }}" href="{{ url('rumah_tangga') }}">Rumah Tangga</a>
    <a class="nav-link {{ active(['kelompok']) }}" href="{{ url('kelompok') }}" >Kelompok</a>
  </nav>
</div>
@yield('content-penduduk')

@endsection