<?php

namespace App\Http\Controllers\Admin;

use App\Services\NivelServices;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Admin\NivelRequest;
use App\DataTables\Admin\NivelesDataTable;
use App\Http\Requests\Admin\NivelUpdateRequest;

class NivelesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(NivelesDataTable $dataTable)
    {
        $permisos = Permission::all()->toJson();
        return $dataTable->render('pages.admin.nivel.index', compact('permisos'));
    }

    public function store(NivelRequest $request)
    {
        // Creamos el nivel
        $nivel = NivelServices::storeNivel($request->validated());

        if ($nivel) {
            return response()->json(['message' => "El nivel {$nivel->name} ha sido creado."], 201);
        }

        // Retornamos un error si no se pudo crear el nivel
        return response()->json(['message' => 'No se pudo crear el nivel.'], 500);
    }
    public function update(NivelUpdateRequest $request, $id)
    {
        //Editamos el nivel
        $nivel = NivelServices::updateNivel($id,$request->validated());

        if ($nivel) {
            return response()->json(['message' => "El nivel {$nivel->name} ha sido editado."], 201);
        }

        // Retornamos un error si no se pudo crear el nivel
        return response()->json(['message' => 'No se pudo editar el nivel.'], 500);
    }
}