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
  <table class="table mb-0">
    <tbody>
      <tr>
        <td>Nama Pendataan</td>
        <td>:</td>
        <td>Data BDT</td>
      </tr>
      <tr>
        <td>Subjek</td>
        <td>:</td>
        <td>Keluarga</td>
      </tr>
      <tr>
        <td>Periode</td>
        <td>:</td>
        <td>2017</td>
      </tr>
    </tbody>
  </table> 

  <div class="table-responsive">
   <table id="data-table" class="table table-bordered">
     <thead class="thead-default">
         <tr>
             <th>NKK</th>
             <th>Kepala Keluarga</th>
             <th>L/P</th>
             <th>Kecamatan</th>
             <th>Kampung</th>
             <th>RW</th>
             <th>RT</th>
             <th>Status</th>
             <th>Action</th>
         </tr>
     </thead>              
      <tbody>
          <tr>
             <td>5201140104166999</td>
             <td>ASHARI</td>
             <td>L</td>
             <td>Tanjung Redeb</td>
             <td>Gayam</td>
             <td>-</td>
             <td>001</td>
             <td></td>
              <td>
                  <div class="btn-group">
                      <a href="{{ url('pendataan/parameter') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Input Data</a>
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
          <tr>
             <td>5201140105136997</td>
             <td>DAHRI</td>
             <td>L</td>
             <td>Tanjung Redeb</td>
             <td>Gayam</td>
             <td>-</td>
             <td>004</td>
             <td></td>
              <td>
                  <div class="btn-group">
                      <a href="{{ url('pendataan/parameter') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Input Data</a>
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
          </tr>
          <tr>
             <td>5201140106166996</td>
             <td>BAIQ OLIVIA APRILLIANI</td>
             <td>L</td>
             <td>Tanjung Redeb</td>
             <td>Gayam</td>
             <td>-</td>
             <td>004</td>
             <td></td>
              <td>
                  <div class="btn-group">
                      <a href="{{ url('pendataan/parameter') }}" class="btn btn-sm btn-outline-info"><i class="zmdi zmdi-view-list"></i> Input Data</a>
                      <a href="#" class="btn btn-sm btn-outline-success" data-delete-id=""><i class="zmdi zmdi-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id=""><i class="zmdi zmdi-delete"></i></a>

                  </div>
              </td>
          </tr>
      </tbody>
   </table>
@endsection
