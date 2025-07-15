<?php
namespace App\DataTables\Admin;

use App\Models\Grupo;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class GruposDataTable extends DataTable
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
            ->editColumn('name', function (Grupo $model) {
                return $model->name;
            })
            ->editColumn('descripcion', function (Grupo $model) {
                return $model->descripcion;
            })
            ->editColumn('imagen', function (Grupo $model) {
                if ($model->imagen) {
                    $url = asset('demo3/media/svg/shapes/' . $model->imagen);
                    return '<img src="' . $url . '" alt="Logo" class="h-40px" style="object-fit:contain;max-width:60px;">';
                }
                return '-';
            })
            ->editColumn('creador_nombre', function (Grupo $model) {
                return $model->creador_nombre ?? 'N/A'; // Assuming 'user' is the attribute for the creator's name
            })
            ->editColumn('status', function (Grupo $model) {
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
                return view('pages.admin.grupo._action-menu', compact('grupo'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\Grupo  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Grupo $model)
    {
        return $model->newQuery()
        ->select('grupos.*', 'users.user as creador_nombre')
        ->leftJoin('users', 'grupos.creador_id', '=', 'users.id');
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
                'filename' => 'Grupos_' . date('Ymd_His'),
                'exportOptions' => [
                    'columns' => ':not(:last-child)'
                ]
            ],
        ];
        if (auth()->user()->can('admin_grupos_create')) {
            $buttons[] = [
                'text' => '<i class="fas fa-plus fs-1"></i> ' . __('Add Group'),
                'className' => 'btn-light btn-active-light-success text-white',
                'attr' => [
                    'id' => 'add-grupo-btn',
                    'name' => 'add-grupo-btn'
                ]
            ];
        }
        return $this->builder()
            ->setTableId('grupos-table')
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
            Column::make('creador_nombre')->title(__('Creator')),
            Column::make('descripcion')->title(__('Description')),
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