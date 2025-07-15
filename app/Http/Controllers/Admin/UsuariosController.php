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

        return $dataTable->render('pages.admin.user.index', compact('grupos', 'niveles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // Creamos el usuario, asignándole su rol y grupo
        $user = UserServices::storeUsuario($request->validated());

        if ($user) {
            return response()->json(['message' => "El usuario {$user->user} ha sido creado."], 201);
        }

        // Retornamos un error si no se pudo crear el usuario
        return response()->json(['error' => 'No se pudo crear el usuario.'], 500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Envia Correo de activacion de usuario
     * @param  string  $username
     *
     * @return \Illuminate\Http\Response
     */
    public function activate(string $username)
    {
        $user = UserServices::activateUser($username);

        if ($user) {
            return response()->json(['message' => $user['message']], $user['code']);
        }

        // Retornamos un error si no se ejecuto correctamente
        return response()->json(['error' => 'No se pudo activar el usuario.'], 500);
    }
}