<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\NivelesDataTable;

class NivelesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(NivelesDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.nivel.index');
    }
}