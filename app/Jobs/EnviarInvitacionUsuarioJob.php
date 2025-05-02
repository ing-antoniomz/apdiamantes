<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Notifications\UsuarioInvitadoNotification;
use App\Notifications\UsuarioInvitadoUsuarioNotification;
use App\Notifications\UsuarioInvitadoAdministradoresNotification;

/**
 * Job para enviar notificaciones relacionadas con la invitación de un usuario.
 *
 * Este job realiza las siguientes acciones:
 * - Notifica al usuario referido sobre su invitación.
 * - Notifica a los administradores sobre el nuevo usuario invitado.
 * - Notifica al usuario que realizó la invitación sobre el estado de la misma.
 */
class EnviarInvitacionUsuarioJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var User $user El usuario que realiza la invitación.
     */
    public $user;

    /**
     * @var User $referido El usuario que ha sido invitado.
     */
    public $referido;

    /**
     * @var array $datos Datos adicionales necesarios para la invitación.
     */
    public $datos;

    /**
     * Crea una nueva instancia del job.
     *
     * @param User $user El usuario que realiza la invitación.
     * @param User $referido El usuario que ha sido invitado.
     * @param array $datos Datos adicionales necesarios para la invitación.
     */
    public function __construct(User $user, User $referido, array $datos)
    {
        $this->user = $user;
        $this->referido = $referido;
        $this->datos = $datos;
    }

    /**
     * Maneja la ejecución del job.
     *
     * Este método realiza las siguientes acciones:
     * - Envía una notificación al usuario referido.
     * - Envía una notificación a todos los administradores.
     * - Envía una notificación al usuario que realizó la invitación.
     *
     * @return void
     * @throws \Throwable Si ocurre un error durante la ejecución del job.
     */
    public function handle()
    {
        try {
            // Notificar al usuario referido
            $this->referido->notify(new UsuarioInvitadoNotification($this->referido, $this->datos));

            // Obtener todos los administradores y notificarles
            $admins = User::role('Administrador')->get();
            foreach ($admins as $admin) {
                $admin->notify(new UsuarioInvitadoAdministradoresNotification($this->user, $this->referido, $admin));
            }

            // Notificar al usuario que realizó la invitación
            $this->user->notify(new UsuarioInvitadoUsuarioNotification($this->user, $this->referido));
        } catch (\Throwable $e) {
            // Registrar el error en los logs
            Log::error('EIUJ-001 - Error en Job de notificación | ' . __METHOD__ . " Archivo: " . $e->getFile() . ' Línea: ' . $e->getLine() . PHP_EOL . $e->getMessage());
            throw $e;
        }
    }
}
