<?php

namespace App\DataTables\Logs;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SystemLogsDataTable extends DataTable
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
            ->collection($query)
            ->rawColumns(['level', 'date'])
            ->editColumn('id', function (Collection $model) {
                return Str::limit($model->get('id'), 5, '');
            })
            ->editColumn('file_path', function (Collection $model) {
                return Str::limit($model->get('file_path'));
            })
            ->editColumn('message', function (Collection $model) {
                return Str::limit($model->get('context')->message, 200);
            })
            ->editColumn('date', function (Collection $model) {
                return $model->get('date');
            })
            ->editColumn('level', function (Collection $model) {
                $styles = [
                    'emergency' => 'danger',
                    'alert'     => 'warning',
                    'critical'  => 'danger',
                    'error'     => 'danger',
                    'warning'   => 'warning',
                    'notice'    => 'success',
                    'info'      => 'info',
                    'debug'     => 'primary',
                ];
                $style  = 'info';
                if (isset($styles[$model->get('level')])) {
                    $style = $styles[$model->get('level')];
                }
                $value = $model->get('level');

                return '<div class="badge badge-light-'.$style.' fw-bolder">'.$value.'</div>';
            })
            ->editColumn('context', function (Collection $model) {
                $content = $model->get('context');

                return view('pages.log.system._details', compact('content'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param  LogReader  $model
     *
     * @return Collection
     */
    /* public function query(LogReader $model)
    {
        $data = collect();

        $model->setLogPath(storage_path('logs'));

        try {
            $data = $model->get()->merge($data);
        } catch (UnableToRetrieveLogFilesException $exception) {
        }

        $data = $data->map(function ($a) {
            return (collect($a))->only(['id', 'date', 'environment', 'level', 'file_path', 'context']);
        });

        return $data;
    } */
    public function query()
    {
        $logsPath = storage_path('logs');
        $files = File::files($logsPath);
        $data = collect();

        foreach ($files as $file) {
            // Solo procesa archivos .log
            if ($file->getExtension() !== 'log') {
                continue;
            }

            $lines = explode("\n", File::get($file));
            $logEntry = [];
            $id = 0;

            foreach ($lines as $line) {

                // Detecta inicio de entrada de log: [2025-04-16 23:41:26] local.INFO: mensaje
                if (preg_match('/^\[(.*?)\].*?([a-zA-Z]+):\s(.*)$/', $line, $matches)) {
                    if (!empty($logEntry)) {
                        $data->push(collect($logEntry));
                        $logEntry = [];
                    }

                    $id++;
                    //dd($matches);
                    $logEntry = [
                        'id'          => (string) $id,
                        'date'        => (string) $matches[1],
                        'level'       => strtolower($matches[2]),
                        'message'     => trim($matches[3]),
                        'environment' => app()->environment(),
                        'file_path'   => $file->getPathname(),
                        'context'     => (object)['message' => trim($matches[3])],
                    ];
                } else {
                    // Agrega líneas adicionales al contexto
                    if (!empty($logEntry)) {
                        $logEntry['context']->message .= "\n" . $line;
                    }
                }
            }

            if (!empty($logEntry)) {
                $data->push(collect($logEntry));
            }
        }

        return $data;
    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('system-log-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->stateSave(true)
            ->orderBy(0)
            ->responsive()
            ->autoWidth(false)
            ->parameters([
                'scrollX' => true,
                'language' => [
                    'url' => url('lang/datatables/' . app()->getLocale() . '.json'),
                ],
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
            Column::make('id')->title('Log ID')->width(100)->addClass('ps-0'),
            Column::make('message')->title(__('Message')),
            Column::make('level')->title(__('Level')),
            Column::make('date')->width(200)->title(__('Date')),
            Column::make('environment')->addClass('none'),
            Column::make('file_path')->title(__('Log Path'))->addClass('none'),
            Column::make('context')->addClass('none'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'SystemLogs_'.date('YmdHis');
    }
}
