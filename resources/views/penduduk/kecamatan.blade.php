@extends('penduduk.layout')

@section('vendors-script')
  @parent
 <!-- Vendors: Data tables -->
  <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
@endsection

@section('content-penduduk')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Wilayah Administrasi Kecamatan</h5>            
            
        </div>
        <div class="card-block">
            <a href="{{ url('kecamatan/create') }}" class="btn btn-primary waves-effect">Tambah Data</a>

            <div class="table-responsive">
             <table id="data-table" class="table table-bordered">
               <thead class="thead-default">
                   <tr>
                       <th>ID</th>
                       <th>Nama Kecamatan</th>
                       <th>Nama Kepala Camat</th>
                       <th>Kampung / Kelurahan</th>
                       <th>RW</th>
                       <th>RT</th>
                       <th>KK</th>
                       <th>Jiwa</th>
                       <th>LK</th>
                       <th>PR</th>
                       <th>Action</th>
                   </tr>
               </thead>
                 <tfoot>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th></th>
                        <th>7</th>
                        <th>4</th>
                        <th>10</th>
                        <th>50</th>
                        <th>120</th>
                        <th>75</th>
                        <th>65</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>64.01</td>
                        <td>Tanjung Redeb</td>
                        <td></td>
                        <td>4</td>
                        <td>30</td>
                        <td>50</td>
                        <td>75</td>
                        <td>125</td>
                        <td>78</td>
                        <td>47</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('kampung') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Rincian</a>
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                        <tr>
                        <td>64.02</td>
                        <td>Sambaliung</td>
                        <td></td>
                        <td>4</td>
                        <td>30</td>
                        <td>50</td>
                        <td>75</td>
                        <td>125</td>
                        <td>78</td>
                        <td>47</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('kampung') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Rincian</a>
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                    </tr>
                        <tr>
                        <td>64.02</td>
                        <td>Gunung Tabur</td>
                        <td></td>
                        <td>4</td>
                        <td>30</td>
                        <td>50</td>
                        <td>75</td>
                        <td>125</td>
                        <td>78</td>
                        <td>47</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('kampung') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Rincian</a>
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                </tbody>
             </table>
           </div>
        </div>
    </div>


     
@endsection
