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
            <h5 class="card-title">Daftar Kelompok<h5>           
             
        </div>
        <div class="card-block">
            <a href="{{ url('rumah_tangga/create') }}" class="btn btn-primary waves-effect">Tambah Data Kelompok</a>

            <div class="table-responsive">
             <table id="data-table" class="table table-bordered">
               <thead class="thead-default">
                   <tr>
                       <th>Nama</th>
                       <th>Ketua Kelompok</th>
                       <th>Master Kelompok</th>
                       <th>Action</th>
                   </tr>
               </thead>              
                <tbody>
                    <tr>
                        <td></td>
                        <td>AHMAD ALLIF RIZKI</td>
                        <td></td>
                        <td>Kelompok A</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('keluarga/rincian') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Rincian</a>
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
