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
            <h5 class="card-title">Daftar Anggota Keluarga<h5>           
            <small>No. KK: 5201140104126994</small> 
            <small>Nama KK: AHLUL</small> 
            <small>Alamat: RT 004 / RW - Gayam</small> 
        </div>
        <div class="card-block">
            <a href="{{ url('keluarga/rincian/create') }}" class="btn btn-primary waves-effect">Tambah Anggota Keluarga</a>

            <div class="table-responsive">
             <table id="data-table" class="table table-bordered">
               <thead class="thead-default">
                   <tr>
                       <th>NIK</th>
                       <th>Nama</th>
                       <th>Tanggal Lahir</th>
                       <th>Jenis Kelamin</th>
                       <th>Hubungan</th>
                       <th>Action</th>
                   </tr>
               </thead>              
                <tbody>
                    <tr>
                        <td>5201142005716996</td>
                        <td>AHLUL</td>
                        <td>20 Mei 1970</td>
                        <td>LAKI-LAKI</td>
                        <td>KEPALA KELUARGA</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                        <tr>
                        <td>5201140104126995</td>
                        <td>AHMAD HABIB</td>
                        <td>03 Januari 1990</td>
                        <td>LAKI-LAKI</td>
                        <td>Anak</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                    </tr>
                        <tr>
                        <td>5201140104166999</td>
                        <td>AHMAD ALLIF RIZKI</td>
                        <td>07 Juni 1995</td>
                        <td>LAKI-LAKI</td>
                        <td>Anak</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                </tbody>
             </table>
           </div>

            <a href="{{ url('keluarga') }}" class="btn btn-secondary waves-effect">Kembali</a>
        </div>
    </div>


     
@endsection
