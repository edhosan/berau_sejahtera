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
            <h5 class="card-title">Daftar Keluarga<h5>           
             
        </div>
        <div class="card-block">
            <a href="{{ url('keluarga/create') }}" class="btn btn-primary waves-effect">Tambah Data Baru</a>
            <a href="{{ url('keluarga/create/old') }}" class="btn btn-success waves-effect">Tambah Data</a>

            <div class="table-responsive">
             <table id="data-table" class="table table-bordered">
               <thead class="thead-default">
                   <tr>
                       <th>NKK</th>
                       <th>Kepala Keluarga</th>
                       <th>NIK</th>
                       <th>Jumlah Anggota</th>
                       <th>Jenis Kelamin</th>
                       <th>Alamat</th>
                       <th>Kecamatan</th>
                       <th>Kampung</th>
                       <th>RW</th>
                       <th>RT</th>
                       <th>Action</th>
                   </tr>
               </thead>              
                <tbody>
                    <tr>
                        <td>5201140104126994</td>
                        <td>AHLUL</td>
                        <td>5201142005716996</td>
                        <td>4</td>
                        <td>LAKI-LAKI</td>
                        <td></td>
                        <td>Tanjung Redeb</td>
                        <td>Gayam</td>
                        <td>-</td>
                        <td>004</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('keluarga/rincian') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Rincian</a>
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                        <tr>
                        <td>5201140104126995</td>
                        <td>AHYAR</td>
                        <td>5201141003666996</td>
                        <td>4</td>
                        <td>LAKI-LAKI</td>
                        <td></td>
                        <td>Tanjung Redeb</td>
                        <td>Gunung Panjang</td>
                        <td>-</td>
                        <td>001</td>
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
                        <td>5201140104166999</td>
                        <td>ASHARI</td>
                        <td>5201140107867064</td>
                        <td>3</td>
                        <td>LAKI-LAKI</td>
                        <td></td>
                        <td>Tanjung Redeb</td>
                        <td>Karang Ambun</td>
                        <td>-</td>
                        <td>002</td>
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
