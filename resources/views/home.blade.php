@extends('layouts.default')

@section('content-header-title','Home')

@section('content-header-actions')
<a href="" class="actions__item zmdi zmdi-trending-up"></a>
<a href="" class="actions__item zmdi zmdi-check-all"></a>
@endsection

@section('vendors-script')
  @parent
  <script src="{{ asset('vendors/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
@endsection


@section('content')
  <header class="content__title">
    <h1>Dashboard</h1>
    <small>Selamat datang, di Sistem Informasi Manajemen Penanggulangan Kemiskinan Kabupaten Berau</small>

    <div class="actions">
            <a href="" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Refresh</a>
                    <a href="" class="dropdown-item">Manage Widgets</a>
                    <a href="" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
  </header>

    <div class="row quick-stats">
        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-light-blue">
                <div class="quick-stats__info">
                    <h2>987,459</h2>
                    <small>Total Keluarga Sangat Miskin</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">6,4,8,6,5,6,7,8,3,5,9,5</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-amber">
                <div class="quick-stats__info">
                    <h2>356,785K</h2>
                    <small>Total Keluarga Miskin</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">4,7,6,2,5,3,8,6,6,4,8,6</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-purple">
                <div class="quick-stats__info">
                    <h2>$58,778</h2>
                    <small>Total Keluarga Rentan Miskin</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">9,4,6,5,6,4,5,7,9,3,6,5</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-red">
                <div class="quick-stats__info">
                    <h2>214</h2>
                    <small>Total Keluarga Hampir Miskin</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">5,6,3,9,7,5,4,6,5,6,4,9</div>
            </div>
        </div>
    </div>

    <div class="row">
    	<div class="col-md-6">
			<div class="card">
	            <div class="card-header">
	                <h2 class="card-title">Statistik Raskin</h2>
	            </div>

	            <div class="card-block">
	                <div class="flot-chart flot-pie"></div>
	                <div class="flot-chart-legends flot-chart-legend--pie"></div>
	            </div>

	              <table class="table mb-3">
	                <thead  class="thead-default">
	                <tr>
	                    <th>#</th>
	                    <th>Jenis Kelompok</th>
	                    <th>Jumlah</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                    <th scope="row">1</th>
	                    <td>Peserta</td>
	                    <td>10</td>
	                </tr>
	                <tr>
	                    <th scope="row">2</th>
	                    <td>Bukan Peserta</td>
	                    <td>30</td>
	                </tr>
	                <tr>
	                    <th scope="row">3</th>
	                    <td>Belum Mengisi</td>
	                    <td>50</td>
	                </tr>
	                </tbody>
	            </table>
	        </div>

	       
		</div>

		<div class="col-md-6">
			<div class="card">
	            <div class="card-header">
	                <h2 class="card-title">Statistik BLSM</h2>
	            </div>

	            <div class="card-block">
	                <div class="flot-chart flot-pie-2"></div>
	                <div class="flot-chart-legends flot-chart-legend--pie"></div>
	            </div>

	             <table class="table mb-3">
	                <thead  class="thead-default">
	                <tr>
	                    <th>#</th>
	                    <th>Jenis Kelompok</th>
	                    <th>Jumlah</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                    <th scope="row">1</th>
	                    <td>Peserta</td>
	                    <td>20</td>
	                </tr>
	                <tr>
	                    <th scope="row">2</th>
	                    <td>Bukan Peserta</td>
	                    <td>40</td>
	                </tr>
	                <tr>
	                    <th scope="row">3</th>
	                    <td>Belum Mengisi</td>
	                    <td>60</td>
	                </tr>
	                </tbody>
	            </table>
	        </div>
		</div>
    </div>
   

@endsection

@push('scripts')
<script type="text/javascript">
	$(document).ready(function () {
		'use strict';

		// Quick stats bar chart
	    if($('.sparkline-bar-stats')[0]) {
	        $('.sparkline-bar-stats').sparkline('html', {
	            type: 'bar',
	            height: 36,
	            barWidth: 3,
	            barColor: '#fff',
	            barSpacing: 2
	        });
	    }

	    // Make some sample data
	    var pieData = [
	        {data: 1, color: '#ff6b68', label: 'Peserta'},
	        {data: 2, color: '#03A9F4', label: 'Bukan Peserta'},
	        {data: 3, color: '#32c787', label: 'Belum Mengisi'},
	    ];
	    
	    // Pie Chart
	    if($('.flot-pie')[0]){
	        $.plot('.flot-pie', pieData, {
	            series: {
	                pie: {
	                    show: true,
	                    stroke: {
	                        width: 2
	                    }
	                }
	            },
	            legend: {
	                container: '.flot-chart-legend--pie',
	                backgroundOpacity: 0.5,
	                noColumns: 0,
	                backgroundColor: "white",
	                lineWidth: 0,
	                labelBoxBorderColor: '#fff'
	            }
	        });
	    }

	      // Pie Chart

	       // Make some sample data
	    var pieData2 = [
	        {data: 4, color: '#ff6b68', label: 'Peserta'},
	        {data: 5, color: '#03A9F4', label: 'Bukan Peserta'},
	        {data: 6, color: '#32c787', label: 'Belum Mengisi'},
	    ];

	    if($('.flot-pie-2')[0]){
	        $.plot('.flot-pie-2', pieData2, {
	            series: {
	                pie: {
	                    show: true,
	                    stroke: {
	                        width: 2
	                    }
	                }
	            },
	            legend: {
	                container: '.flot-chart-legend--pie',
	                backgroundOpacity: 0.5,
	                noColumns: 0,
	                backgroundColor: "white",
	                lineWidth: 0,
	                labelBoxBorderColor: '#fff'
	            }
	        });
	    }
	});
</script>
@endpush
