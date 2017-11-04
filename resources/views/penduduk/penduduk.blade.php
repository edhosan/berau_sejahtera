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
            <h5 class="card-title">Daftar Penduduk<h5>           
             
        </div>
        <div class="card-block">
            <a href="{{ url('penduduk/create') }}" class="btn btn-primary waves-effect">Tambah Data Penduduk</a>

            <div class="table-responsive">
             <table id="data-table" class="table table-bordered">
               <thead class="thead-default">
                   <tr>
                       <th>NIK</th>
                       <th>Nama</th>
                       <th>No. KK</th>
                       <th>Alamat</th>
                       <th>Kecamatan</th>
                       <th>Kampung / Kelurahan</th>
                       <th>RW</th>
                       <th>RT</th>
                       <th>Pendidikan dalam KK</th>
                       <th>Umur</th>
                       <th>Pekerjaan</th>
                       <th>Kawin</th>
                       <th>Action</th>
                   </tr>
               </thead>              
                <tbody>
                    <tr>
                        <td>5201140706966997</td>
                        <td>AHMAD ALLIF RIZKI</td>
                        <td>5201140104126994</td>
                        <td></td>
                        <td>Tanjung Redeb</td>
                        <td>Gayam</td>
                        <td>-</td>
                        <td>001</td>
                        <td>TIDAK / BELUM SEKOLAH</td>
                        <td>36</td>
                        <td>BELUM/TIDAK BEKERJA</td>
                        <td>BELUM KAWIN</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('keluarga/rincian') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Rincian</a>
                                <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                            </div>
                        </td>
                    </tr>
                        <tr>
                        <td>5201140706966997</td>
                        <td>AHMAD HABIB</td>
                        <td>5201140104126994</td>
                        <td></td>
                        <td>Tanjung Redeb</td>
                        <td>Gayam</td>
                        <td>-</td>
                        <td>001</td>
                        <td>TIDAK / BELUM SEKOLAH</td>
                        <td>36</td>
                        <td>BELUM/TIDAK BEKERJA</td>
                        <td>BELUM KAWIN</td>
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
                         <td>5201140706966997</td>
                        <td>APTA MADA RIZKY ALAMSYAH</td>
                        <td>5201140104126994</td>
                        <td></td>
                        <td>Tanjung Redeb</td>
                        <td>Gayam</td>
                        <td>-</td>
                        <td>001</td>
                        <td>TIDAK / BELUM SEKOLAH</td>
                        <td>36</td>
                        <td>BELUM/TIDAK BEKERJA</td>
                        <td>BELUM KAWIN</td>
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
