<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, $id, $hash)
    {
        try {
            $user = User::findOrFail($id);

            // Validar hash del email (como lo hace Laravel internamente)
            if (! hash_equals(sha1($user->getEmailForVerification()), $hash)) {
                abort(403, 'El enlace de verificación no es válido.');
            }

            // Verificar si ya fue verificado antes
            if ($user->hasVerifiedEmail()) {
                return redirect()->route('login')->with('status', 'Usuario ya Activado con anterioridad.');
            }

            // Verificar email
            $user->markEmailAsVerified();

            // Registrar actividad
            activity()
                ->causedBy($user)
                ->performedOn($user)
                ->withProperties([
                    'accion' => 'activacion',
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'fecha' => now()->toDateTimeString(),
                ])
                ->log('El usuario activó su cuenta y verificó su correo');

            return redirect()->route('login')->with('status', 'Usuario Activado con éxito.');
        } catch (\Exception $e) {
            // Registrar el error
            Log::error('Error al activar y verificar al usuario', [
                'id' => $id,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Retornar mensaje genérico
            return redirect()->route('login')->with('status', 'Ocurrió un error al activar tu cuenta. Intenta más tarde.');
        }
    }
}