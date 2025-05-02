<?php

namespace App\Services;

// Importamos el job que se encargará de enviar la invitación al usuario
use App\Jobs\EnviarInvitacionUsuarioJob;

class MailServices
{
    /**
     * Método estático para encolar un job que envía correos de invitación a usuarios.
     *
     * @param mixed $user El usuario que envía la invitación.
     * @param mixed $referido El usuario referido que recibirá la invitación.
     * @param array $datos Datos adicionales necesarios para el envío del correo.
     */
    public static function invitaUsuarioCorreos($user, $referido, $datos)
    {
        // Encolamos el job para enviar la invitación al usuario referido.
        EnviarInvitacionUsuarioJob::dispatch($user, $referido, $datos);
    }
}