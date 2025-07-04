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
    public function activationEmail(string $username)
    {
        try {
            $user = User::where('user', $username)->firstOrFail();

            if ($user->hasVerifiedEmail()) {
                return response()->json(['message' => 'El correo ya está verificado.'], 400);
            }

            $user->sendEmailVerificationNotification();

            // Registrar en activity log
            activity()
                ->causedBy(auth()->user() ?? $user) // si está logueado, usa el usuario actual; si no, el mismo usuario
                ->performedOn($user)
                ->withProperties([
                    'accion' => 'reenviar_correo_verificacion',
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                    'fecha' => now()->toDateTimeString(),
                ])
                ->log('Se reenvió el correo de verificación al usuario');

            return response()->json(['message' => 'Correo de verificación enviado.']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            \Illuminate\Support\Facades\Log::warning('Usuario no encontrado para enviar verificación', [
                'username' => $username,
                'error' => $e->getMessage(),
            ]);
            return response()->json(['message' => 'Usuario no encontrado.'], 404);
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Error al enviar correo de verificación', [
                'username' => $username,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return response()->json(['message' => 'Error al enviar el correo de verificación.'], 500);
        }
    }
}