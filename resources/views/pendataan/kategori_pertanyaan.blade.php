@extends('pendataan.pendataan_rincian_layout')

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

@section('content-pendataan')
  <a href="{{ url('keluarga/create') }}" class="btn btn-primary waves-effect">Tambah Kategori Baru</a>

  <div class="table-responsive">
   <table id="data-table" class="table table-bordered">
     <thead class="thead-default">
         <tr>
             <th>Ketegori</th>
             <th>Action</th>
         </tr>
     </thead>              
      <tbody>
          <tr>
              <td>Informasi Keluarga</td>
              <td>
                  <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
              <tr>
              <td>Kondisi Rumah</td>
              <td>
                  <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
          </tr>
              <tr>
              <td>Kondisi Sosial Ekonomi</td>
              <td>
                  <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
      </tbody>
   </table>
@endsection
