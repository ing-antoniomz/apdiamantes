<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Request;

class LogSuccessfulLogin
{
    public function handle(Login $event)
    {
        activity('logs')
            ->causedBy($event->user)
            ->withProperties([
                'accion' => 'login',
                'ip' => Request::ip(),
                'user_agent' => Request::userAgent(),
                'fecha' => now()->toDateTimeString(),
            ])
            ->useLog('logs')
            ->tap(function (Activity $activity) {
                $activity->event = 'login';
            })
            ->log('El usuario inició sesión');
    }
}
