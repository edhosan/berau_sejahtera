@extends('penduduk.layout')

@section('vendors-script')
  @parent
 <!-- Vendors: Data tables -->
  <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
@endsection

@section('content-penduduk')   
   <br>
   <h4 class="card-title">Wilayah Administratif RT (RW {{ $rw->rw }})</h4>
   <br>
   <a href="{{ route('rt.create', [$kecamatan->id, $kampung->id, $rw->id]) }}" class="btn btn-primary waves-effect">Tambah Data RT</a>
   <div class="table-responsive">
     <table id="data-table-rt" class="table table-bordered">
       <thead class="thead-default">
           <tr>
               <th>ID</th>
               <th>RT</th>
               <th>TGL.DIBUAT</th>
               <th>TGL.DIUBAH</th>
               <th>ACTION</th>
           </tr>
       </thead>
     </table> 
   </div>  
   <a href="{{ route('rw.index', [$kecamatan, $kampung->id]) }}" class="btn btn-secondary waves-effect">Kembali</a>
@endsection

@push('scripts')
<script type="text/javascript">
// Add custom buttons
var dataTableButtons =  '<div class="dataTables_buttons hidden-sm-down actions">' +
                            '<span class="actions__item zmdi zmdi-print" data-table-action="print" />' +
                            '<span class="actions__item zmdi zmdi-fullscreen" data-table-action="fullscreen" />' +
                            '<div class="dropdown actions__item">' +
                                '<i data-toggle="dropdown" class="zmdi zmdi-download" />' +
                                '<ul class="dropdown-menu dropdown-menu-right">' +
                                    '<a href="" class="dropdown-item" data-table-action="excel">Excel (.xlsx)</a>' +
                                    '<a href="" class="dropdown-item" data-table-action="csv">CSV (.csv)</a>' +
                                '</ul>' +
                            '</div>' +
                        '</div>';

var table = $('#data-table-rt').DataTable({
    autoWidth: false,
    responsive: true,
    lengthMenu: [[15, 30, 45, -1], ['15 Rows', '30 Rows', '45 Rows', 'Everything']],
    ajax: '{{ route("rt.index", [$kecamatan->id, $kampung->id, $rw->id]) }}',
    serverSide: true,
    processing: true,
    columns: [
        { data: 'id', name: 'id'},
        { data: 'rt', name: 'rt' },
        { data: 'created_at', name: 'created_at' },
        { data: 'updated_at', name: 'updated_at' },
        { data: 'action', name: 'action', orderable: false, searchable: false}
    ],
    language: {
        searchPlaceholder: "Search for records..."
    },
    dom: 'Blfrtip',
    buttons: [
        {
            extend: 'excelHtml5',
            title: 'Export Data'
        },
        {
            extend: 'csvHtml5',
            title: 'Export Data'
        },
        {
            extend: 'print',
            title: 'Daftar User'
        }
    ],
    "initComplete": function(settings, json) {
        $(this).closest('.dataTables_wrapper').prepend(dataTableButtons);
    }
});

// Add blue line when search is active
$('.dataTables_filter input[type=search]').focus(function () {
    $(this).closest('.dataTables_filter').addClass('dataTables_filter--toggled');
});

$('.dataTables_filter input[type=search]').blur(function () {
    $(this).closest('.dataTables_filter').removeClass('dataTables_filter--toggled');
});

$('body').on('click', '[data-table-action]', function (e) {
    e.preventDefault();

    var exportFormat = $(this).data('table-action');

    if(exportFormat === 'excel') {
        $(this).closest('.dataTables_wrapper').find('.buttons-excel').trigger('click');
    }
    if(exportFormat === 'csv') {
        $(this).closest('.dataTables_wrapper').find('.buttons-csv').trigger('click');
    }
    if(exportFormat === 'print') {
        $(this).closest('.dataTables_wrapper').find('.buttons-print').trigger('click');
    }
    if(exportFormat === 'fullscreen') {
        var parentCard = $(this).closest('.card');

        if(parentCard.hasClass('card--fullscreen')) {
            parentCard.removeClass('card--fullscreen');
            $('body').removeClass('data-table-toggled');
        }
        else {
            parentCard.addClass('card--fullscreen')
            $('body').addClass('data-table-toggled');
        }
    }
});

$('body').on('click', '[data-delete-id]', function (e) {
  e.preventDefault();
  var id = $(this).attr('data-delete-id');
   swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this data!',
        type: 'warning',
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-danger',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonClass: 'btn btn-secondary'
    }).then(function(){       
        $.ajax({
          url: '{{ route('rt.delete') }}',
          type: 'GET',
          dataType: "json",
          data: { id : id, wil_kecamatan_id: {{ $kecamatan->id }}, wil_kampung_id: {{ $kampung->id }}, wil_rw_id: {{ $rw->id }} },
          success: function(response){
            swal({
                title: 'Information!',
                text: 'Data berhasil dihapus',
                type: 'success',
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-primary'
            });
            table.ajax.reload();
          },
          error: function(errors){
             swal({
                title: 'Error',
                text: errors,
                type: 'warning',
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-primary'
            })
          }
        });
    });
});



</script>
@endpush
