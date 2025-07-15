<?php
namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Request;
use Spatie\Activitylog\Models\Activity;

class LogFailedLogin
{
    public function handle(Failed $event)
    {
        $email = $event->credentials['email'] ?? 'N/A';

        // Intentamos encontrar el usuario por correo
        $user = User::where('email', $email)->first();

        $activity = activity('logs')
        ->withProperties([
            'accion' => 'failed_login',
            'ip' => Request::ip(),
            'user_agent' => Request::userAgent(),
            'fecha' => now()->toDateTimeString(),
            'correo_intentado' => $email,
        ])
        ->useLog('logs')
        ->tap(function (Activity $activity) {
            $activity->event = 'failed_login';
        });

    // Si existe el usuario, lo asignamos como causante
    if ($user) {
        $activity->causedBy($user);
    }
    $activity->causedBy(null); // Si no existe el usuario, no lo asignamos

    // Finalmente registramos la actividad
    $activity->log('Intento de inicio de sesión fallido');

    }
}
