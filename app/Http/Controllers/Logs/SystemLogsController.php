<?php

namespace App\Http\Controllers\Logs;

use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\DataTables\Logs\SystemLogsDataTable;

class SystemLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SystemLogsDataTable $dataTable)
    {

        return $dataTable->render('pages.log.system.index');
    }
}
