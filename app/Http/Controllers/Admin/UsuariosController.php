<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\UsuariosDataTable;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(UsuariosDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
        $activity = User::find($id);

        // Delete from db
        $activity->delete();
    }
}
