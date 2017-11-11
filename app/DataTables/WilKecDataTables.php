<?php

namespace App\DataTables;

use App\Model\WilKecamatan;
use App\Model\WilRw;
use App\Model\WilRT;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class WilKecDataTables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);     

        return $dataTable->addColumn('action', function($data) {
            return '<div class="btn-group">
                        <a href="'.url('/kecamatan').'/'.$data->id.'/kampung" class="btn btn-sm btn-outline-success" data-toggle="tooltip" title="Kampung"><i class="zmdi zmdi-view-list"></i></a> 
                        <a href="'.url('/kecamatan').'/'.$data->id.'/edit" class="btn btn-sm btn-outline-info" data-toggle="tooltip" title="Ubah"><i class="zmdi zmdi-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id="'.$data->id.'" data-toggle="tooltip" title="Hapus" ><i class="zmdi zmdi-delete"></i></a>
                    </div>';
          }
        )->addColumn('kampung', function($data){
            return $data->kampung()->count();
        })->addColumn('tot_rw', function($data){
            $rw = WilRw::where('wil_kecamatan_id', $data->id)->count();

            return $rw;
        })->addColumn('tot_rt', function($data){
            $rt = WilRT::where('wil_kecamatan_id', $data->id)->count();

            return $rt;
        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(WilKecamatan $model)
    {
        return $model->newQuery()->select($this->getColumns());
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
                    ->parameters([
                        'dom'     => 'Bfrtip',
                        'order'   => [[0, 'desc']],
                        'buttons' => [
                            'create',
                            'export',
                            'print',
                            'reset',
                            'reload',
                        ],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'nm_kecamatan',
            'created_at',
            'updated_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'wilkecdatatables_' . time();
    }
}
