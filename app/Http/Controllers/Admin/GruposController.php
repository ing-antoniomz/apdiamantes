<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\GruposDataTable;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(GruposDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.grupo.index');
    }
}