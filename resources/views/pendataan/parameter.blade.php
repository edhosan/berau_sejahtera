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
  <a href="{{ url('keluarga/create') }}" class="btn btn-primary waves-effect">Tambah Parameter Baru</a>

  <div class="table-responsive">
   <table id="data-table" class="table table-bordered">
     <thead class="thead-default">
         <tr>
             <th>Kode</th>
             <th>Jawaban</th>
             <th>Nilai</th>
             <th>Aktif</th>
             <th>Action</th>
         </tr>
     </thead>              
      <tbody>
          <tr>
              <td>1</td>
              <td>>6 (atau 1 orang lansia sebatang kara) </td>
              <td>1</td>
              <td>Aktif</td>
              <td>
                  <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
          <tr>
              <td>2</td>
              <td>5 Orang</td>
              <td>2</td>
              <td>Aktif</td>
              <td>
                  <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
          </tr>
          <tr>
              <td>3</td>
              <td>4 Orang</td>
              <td>3</td>
              <td>Aktif</td>
              <td>
                  <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
      </tbody>
   </table>
    <a href="{{ url('pendataan/pertanyaan') }}" class="btn btn-secondary waves-effect">Kembali</a>
@endsection
