<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Exports\InviteUsersExport;
use Illuminate\Support\Facades\Lang;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UsuarioInvitadoNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $usuario;

    public $datos;

    /**
     * Crea una nueva instancia de la notificación.
     *
     * @param User $usuario El usuario que realiza la invitación.
     * @param array $datos Los datos adicionales necesarios para la invitación.
     */
    public function __construct(User $usuario, $datos)
    {
        $this->usuario = $usuario;
        $this->datos = $datos;
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
     * - Crea y guarda un archivo Excel con los datos de la invitación.
     * - Adjunta el archivo Excel y un PDF de aviso de privacidad al correo.
     * - Configura el contenido del correo con instrucciones para el usuario invitado.
     * - Programa la eliminación del archivo Excel después del envío.
     *
     * @param object $notifiable El objeto que será notificado.
     * @return MailMessage El mensaje de correo configurado para la notificación.
     */
    public function toMail($notifiable)
    {
        // 1. Crear y guardar archivo a partir de la plantilla
        $nombreArchivo = 'apdiamantes/apdiamantes_inscripcion_' . $this->usuario->id . '.xlsx';
        $pdfAvisoPath = public_path('apdiamantes/media/aviso_de_privacidad.pdf');
        $rutaArchivo = Storage::disk('public')->path($nombreArchivo);
        Excel::store(new InviteUsersExport($this->datos), $nombreArchivo, 'public');

        // 2. Crear el mensaje
        $mail = (new MailMessage)
            ->subject('¡Te han invitado a formar parte de APDiamantes!')
            ->line('Hola ' . $this->usuario->getNameAttribute())
            ->line('¡Has sido invitado a unirte al grupo ' . $this->usuario->grupos[0]->name . ' en APDiamantes!')
            ->line('Para continuar con el proceso por favor, firma el documento adjunto y envíalo al correo apdiamantes@correo.com junto con:')
            ->line('- Una copia escaneada de tu INE por ambos lados')
            ->line('- Un comprobante de domicilio')
            ->line('Una vez que recibamos tu información, te enviaremos un correo de confirmación con los siguientes pasos.')
            ->line('Si tienes alguna duda, no dudes en contactarnos.')
            ->salutation(Lang::get('Greetings, ') . config('app.name'))
            ->attach($rutaArchivo, [
                'as' => 'Hoja de Registro APDiamantes.xlsx',
                'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ])->attach($pdfAvisoPath, [
                'as' => 'Aviso de Privacidad APDiamantes.pdf',
                'mime' => 'application/pdf',
            ]);

        // 3. Programar eliminación después del envío (con log de error si falla)
        register_shutdown_function(function () use ($nombreArchivo) {
            if (!Storage::disk('public')->delete($nombreArchivo)) {
                \Log::error('UIN-001 - No se pudo eliminar el archivo temporal: '. $nombreArchivo.' | ' . __METHOD__ );
            }
        });

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
