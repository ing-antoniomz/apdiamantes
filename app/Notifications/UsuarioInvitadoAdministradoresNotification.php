<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UsuarioInvitadoAdministradoresNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $usuario;

    public $referido;

    public $admin;

    /**
     * Crea una nueva instancia de la notificación.
     *
     * @param User $usuario El usuario que realiza la invitación.
     * @param User $referido El usuario que ha sido invitado.
     * @param User $admin El administrador que recibirá la notificación.
     */
    public function __construct(User $usuario, User $referido, User $admin)
    {
        $this->usuario = $usuario;
        $this->referido = $referido;
        $this->admin = $admin;
    }

    /**
     * Obtiene los canales de entrega de la notificación.
     *
     * @param object $notifiable El objeto que será notificado.
     * @return array<int, string> Los canales de entrega (en este caso, 'mail').
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Obtiene la representación de la notificación en formato de correo electrónico.
     *
     * Este método realiza las siguientes acciones:
     * - Configura el contenido del correo para notificar al administrador sobre un nuevo usuario invitado.
     * - Proporciona detalles del usuario que realizó la invitación y del usuario invitado.
     *
     * @param object $notifiable El objeto que será notificado.
     * @return MailMessage El mensaje de correo configurado para la notificación.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mail = (new MailMessage)
            ->subject('Usuario Invitado')
            ->line('Hola ' . $this->admin->getNameAttribute())
            ->line('El usuario ' . $this->usuario->getNameAttribute() . ' ha invitado a un nuevo compañero.')
            ->line('Haz el seguimiento de la inscripción de: ' . $this->referido->getNameAttribute() . ', quien próximamente debería estar enviando su documentación completa.')
            ->line('De ser necesario comunícate con el usuario en cuestión.')
            ->salutation(Lang::get('Thanks for your support, ') . config('app.name'));
        return $mail;
    }

    /**
     * Obtiene la representación de la notificación en formato de arreglo.
     *
     * @param object $notifiable El objeto que será notificado.
     * @return array<string, mixed> Un arreglo con los datos de la notificación.
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
