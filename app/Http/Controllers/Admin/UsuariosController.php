<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Grupo;
use Illuminate\Http\Request;
use App\Services\UserServices;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\DataTables\Admin\UsuariosDataTable;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(UsuariosDataTable $dataTable)
    {
        $grupos = Grupo::all()->pluck('name', 'id');
        $niveles = Role::all()->pluck('name', 'id'); // Obtener los roles del sistema

        return $dataTable->render('pages.admin.index', compact('grupos', 'niveles'));
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
    public function store(UserRequest $request)
    {
        //dd($request->validated());
        //
        // Creamos el usuario, asignándole su rol y grupo
        $user = UserServices::storeUsuario($request->validated());

        if ($user) {
            return response()->json(['message' => "El usuario {$user->user} ha sido creado."], 201);
        }

        // Retornamos un error si no se pudo crear el usuario
        return response()->json(['error' => 'No se pudo crear el usuario.'], 500);
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
