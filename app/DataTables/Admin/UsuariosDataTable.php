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
            ->rawColumns(['action','status'])
            ->editColumn('user', function (User $model) {
                return $model->user;
            })
            ->editColumn('nombre', function (User $model) {
                return $model->getNameAttribute();
            })
            ->editColumn('cuenta_ap', function (User $model) {
                return $model->cuenta_ap;
            })
            ->editColumn('role', function (User $model) {
                return $model->role_name;
            })
            ->orderColumn('role', function ($query, $order) {
                $query->orderBy('role_name', $order);
            })
            ->editColumn('grupo', function (User $model) {
                return $model->grupo;
            })
            ->orderColumn('grupo', function ($query, $order) {
                $query->orderBy('grupo', $order);
            })
            ->editColumn('email', function (User $model) {
                return $model->email;
            })
            ->editColumn('status', function (User $model) {
                 // HTML para la vista
                    $html = $model->status
                    ? '<span class="badge badge-light-success">'.__('Active').'</span>'
                    : '<span class="badge badge-light-danger">'.__('Inactive').'</span>';

                // Exportar como texto limpio (sin HTML)
                if (request()->has('action') && request('action') === 'export') {
                    return $model->status ? __('Active') : __('Inactive');
                }

                return $html;
            })
            ->orderColumn('status', function ($query, $order) {
                $query->orderBy('status', $order);
            })
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
        return $model->newQuery()
            ->leftJoin('model_has_roles', function ($join) {
                $join->on('users.id', '=', 'model_has_roles.model_id')
                    ->where('model_has_roles.model_type', '=', User::class);
            })
            ->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->leftJoin('grupo_usuario', 'users.id', '=', 'grupo_usuario.user_id')
            ->leftJoin('grupos', 'grupo_usuario.grupo_id', '=', 'grupos.id')
            ->select(
                'users.*',
                'roles.name as role_name',
                'grupos.name as grupo' // puedes cambiar 'nombre' por tu campo real
            )
            ->with(['grupos']); // mantiene la relación para acceso completo en otros contextos
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
            ->orderBy(0)
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
                        'extend' => 'excel',
                        'text' => '<i class="fas fa-file-excel fs-1 text-success"></i>',
                        'className' => 'btn-light btn-active-light-success text-white',
                        'filename' => 'APDiamantes_Usuarios_' . date('Ymd'),
                        'exportOptions' => [
                            'columns' => ':not(:last-child)' // Excluye la columna de acciones
                        ]
                    ],
                    [
                        'text' => '<i class="fas fa-plus fs-1"></i> '.__('Add User'),
                        'className' => 'btn-light btn-active-light-success text-white',
                        'attr' => [
                            'id' => 'add-user-btn', // Agregar el ID al botón
                            'name' => 'add-user-btn'
                        ]
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
            Column::make('user')->title(__('Username'))->addClass('ps-0'),
            Column::make('nombre')->title(__('Full Name')),
            Column::make('cuenta_ap')->title(__('Account AP')),
            Column::computed('role')
                ->title(__('Nivel'))
                ->exportable(true)
                ->printable(true)
                ->orderable(true),
            Column::computed('grupo')
                ->title(__('Group'))
                ->exportable(true)
                ->printable(true)
                ->orderable(true),
            Column::make('email')->title(__('E-mail')),
            Column::computed('status')
                ->title(__('Status'))
                ->exportable(true)
                ->printable(true)
                ->addClass('text-center')
                ->orderable(true),
            Column::computed('action')
                ->title(__('Actions'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')
                ->responsivePriority(-1)
        ];
    }

}
