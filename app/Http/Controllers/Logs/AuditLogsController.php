<?php

namespace App\Http\Controllers\Logs;

use App\Http\Controllers\Controller;
use App\DataTables\Logs\AuditLogsDataTable;

class AuditLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuditLogsDataTable $dataTable)
    {

        return $dataTable->render('pages.log.audit.index');
    }
}
