<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UsuarioInvitadoUsuarioNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $usuario;

    public $referido;

    /**
     * Crea una nueva instancia de la notificación.
     *
     * @param User $usuario El usuario que realiza la invitación.
     * @param User $referido El usuario que ha sido invitado.
     */
    public function __construct(User $usuario, User $referido)
    {
        $this->usuario = $usuario;
        $this->referido = $referido;
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
     * @param object $notifiable El objeto que será notificado.
     * @return MailMessage El mensaje de correo configurado para la notificación.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mail = (new MailMessage)
            ->subject('¡Compañero Invitado!')
            ->line('Hola ' . $this->usuario->getNameAttribute())
            ->line('Haz invitado éxitosamente a' . $this->referido->getNameAttribute() . '.')
            ->line('Nos pondremos en contacto con tu referid@ y estaremos atentos a su proceso de inscripción.')
            ->line('Aún así, te recomendamos mantener el contacto y apoyarlo en lo que necesite.')
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
