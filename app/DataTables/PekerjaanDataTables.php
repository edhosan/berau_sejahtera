<?php

namespace App\DataTables;

use App\Model\Pekerjaan;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PekerjaanDataTables extends DataTable
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
                        <a href="'.url('datamaster/pekerjaan').'/'.$data->id.'/edit" class="btn btn-sm btn-outline-info" data-toggle="tooltip" title="Ubah"><i class="zmdi zmdi-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger" data-delete-id="'.$data->id.'" data-toggle="tooltip" title="Hapus" ><i class="zmdi zmdi-delete"></i></a>
                    </div>';
          }
        );
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pekerjaan $model)
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
            'nm_pekerjaan',
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
        return 'pekerjaandatatables_' . time();
    }
}
