<?php

namespace App\Http\Controllers\Grupo;

use App\Services\UserServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Groups\InviteRequest;
use App\Services\MailServices;

/**
 * Controlador para gestionar las invitaciones a grupos.
 *
 * Este controlador maneja la visualización y el almacenamiento de usuarios invitados a un grupo.
 */
class InvitarController extends Controller
{
    /**
     * Muestra la vista principal para invitar usuarios a un grupo.
     *
     * @return \Illuminate\View\View La vista de la página de invitaciones.
     */
    public function index()
    {
        return view('pages.group.invite.index');
    }

    /**
     * Almacena un nuevo usuario invitado en el sistema.
     *
     * Este método realiza las siguientes acciones:
     * - Crea un nuevo usuario utilizando los datos validados de la solicitud.
     * - Asigna el rol y el grupo al usuario creado.
     * - Envía correos electrónicos relacionados con la invitación.
     *
     * @param InviteRequest $request La solicitud validada con los datos del usuario a invitar.
     * @return \Illuminate\Http\JsonResponse Una respuesta JSON con el resultado de la operación.
     */
    public function store(InviteRequest $request)
    {
        // Creamos el usuario, asignándole su rol y grupo
        $user = UserServices::storeUsuario($request->validated());

        if ($user) {
            // Enviamos los correos relacionados con la invitación
            MailServices::invitaUsuarioCorreos(auth()->user(), $user, $request->validated());
            return response()->json(['message' => "El usuario {$user->user} ha sido invitado."], 201);
        }

        // Retornamos un error si no se pudo crear el usuario
        return response()->json(['error' => 'No se pudo crear el usuario.'], 500);
    }
}
