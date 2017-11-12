@extends('layouts.default')

@section('vendors-script')
  @parent
 <!-- Vendors: Data tables -->
  <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
  <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
@endsection

@section('title','Data Master')
@section('subtitle','Manajemen data master agama, pendidikan dalam kk, pendidikan sedang ditempuh, pekerjaan, hubungan keluarga, golongan darah, cacat')

@section('content')
<div class="card">	
	<div class="card-header">  
		<h4 class="card-title">Daftar Cacat</h4>
	</div>
	<div class="card-block">
	   <a href="{{ route('cacat.create') }}" class="btn btn-primary waves-effect">Tambah Data</a>
	   <div class="table-responsive">
	     <table id="data-table-cacat" class="table table-bordered">
	       <thead class="thead-default">
	           <tr>
	               <th>ID</th>
	               <th>CACAT</th>
	               <th>TGL.DIBUAT</th>
	               <th>TGL.DIUBAH</th>
	               <th>ACTION</th>
	           </tr>
	       </thead>
	     </table>
	   </div>  
	</div>
</div>
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

var table = $('#data-table-cacat').DataTable({
    autoWidth: false,
    responsive: true,
    lengthMenu: [[15, 30, 45, -1], ['15 Rows', '30 Rows', '45 Rows', 'Everything']],
    ajax: '{{ url("datamaster/cacat") }}',
    serverSide: true,
    processing: true,
    columns: [
        { data: 'id', name: 'id'},
        { data: 'nm_cacat', name: 'nm_cacat' },
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
          url: '{{ url("datamaster/cacat/delete") }}',
          type: 'GET',
          dataType: "json",
          data: { data : id },
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
