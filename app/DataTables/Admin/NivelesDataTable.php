<?php
namespace App\DataTables\Admin;

use Yajra\DataTables\Html\Column;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Services\DataTable;

class NivelesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->rawColumns(['action','status','imagen'])
            ->editColumn('name', function (Role $model) {
                return $model->name;
            })
            ->editColumn('descripcion', function (Role $model) {
                return $model->descripcion;
            })
            ->editColumn('volumen', function (Role $model) {
                return $model->volumen;
            })
            ->editColumn('imagen', function (Role $model) {
                if ($model->imagen) {
                    $url = asset(Storage::url($model->imagen));
                    return '<img src="' . $url . '" alt="Logo" class="h-40px" style="object-fit:contain;max-width:60px;">';
                }
                return '-';
            })
            ->editColumn('status', function (Role $model) {
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
            ->addColumn('action', function ($grupo) {
                return view('pages.admin.nivel._action-menu', compact('grupo'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \Spatie\Permission\Models\Role  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Role $model)
    {
        return $model->newQuery()
            ->select(
                columns: ['roles.id','roles.name', 'roles.descripcion', 'roles.volumen', 'roles.imagen', 'roles.status'] // puedes cambiar 'name' por tu campo real
            );
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [
            [
                'extend' => 'excel',
                'text' => '<i class="fas fa-file-excel fs-1 text-success"></i>',
                'className' => 'btn-light btn-active-light-success text-white',
                'filename' => 'APDiamantes_Niveles_' . date('Ymd_His'),
                'exportOptions' => [
                    'columns' => ':not(:last-child)'
                ]
            ],
        ];
        if (auth()->user()->can('admin_niveles_create')) {
            $buttons[] = [
                'text' => '<i class="fas fa-plus fs-1 text-success"></i> ' . __('Add Level'),
                'className' => 'btn-light btn-active-light-success text-white',
                'attr' => [
                    'id' => 'add-nivel-btn',
                    'name' => 'add-nivel-btn'
                ]
            ];
        }
        return $this->builder()
            ->setTableId('admin-niveles-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->stateSave(true)
            ->orderBy(1)
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
                'buttons' => $buttons,
                'drawCallback' => 'function() { KTMenu.createInstances(); }',
            ])
            ->addTableClass('align-middle table-row-dashed fs-6 gy-5');

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('imagen')->title(__('Logo'))->addClass('ps-0')->exportable(false)->orderable(flag: false),
            Column::make('name')->title(__('Name')),
            Column::make('descripcion')->title(__('Description')),
            Column::make('volumen')->title(__('Volume')),
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