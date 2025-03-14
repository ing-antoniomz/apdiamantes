<?php

namespace App\DataTables\Admin;

use App\Models\User;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsuariosDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     *
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->rawColumns(['properties', 'action'])
            ->editColumn('id', function (User $model) {
                return $model->id;
            })
            ->editColumn('nombre', function (User $model) {
                return $model->getNameAttribute();
            })
            ->editColumn('email', function (User $model) {
                return $model->email;
            })
            /* ->editColumn('properties', function (Activity $model) {
                $content = $model->properties;

                return view('pages.log.audit._details', compact('content'));
            }) */
            ->addColumn('action', function (User $model) {
                return view('pages.admin._action-menu', compact('model'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('admin-users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->stateSave(true)
            ->orderBy(2)
            ->responsive()
            ->autoWidth(false)
            ->parameters([
                'scrollX'      => true,
                'language' => [
                    'url' => url('lang/datatables/' . app()->getLocale() . '.json'),
                ],
                'dom' => '<"row align-items-center"<"col-sm-12 col-md-6"B><"col-sm-12 col-md-6"f>>' .
                    '<"row"<"col-sm-12"tr>>' .
                    '<"row"<"col-sm-12 col-md-6 d-flex align-items-center"li><"col-sm-12 col-md-6 d-flex justify-content-end"p>>',
                'buttons' => [
                    [
                        'text' => '<i class="fas fa-plus"></i> '.__('Add User'),
                        'className' => 'btn btn-primary',
                    'action' => 'function() {
                        // Limpiar los campos del formulario antes de mostrar el modal
                        $("#userForm")[0].reset();  // Esto limpia el formulario
                        $("#userModal").modal("show");
                    }'
                                        ]
                ],
                'drawCallback' => 'function() { KTMenu.createInstances(); }',
            ])
            ->addTableClass('align-middle table-row-dashed fs-6 gy-5');
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns()
    {
        return [
            Column::make('id')->title('User ID')->addClass('ps-0'),
            Column::make('nombre')->title(__('Full Name')),
            Column::make('email')->title(__('E-mail')),
            Column::computed('action')
                ->title(__('Actions'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')
                ->responsivePriority(-1)
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Usuarios_' . date('YmdHis');
    }
}
