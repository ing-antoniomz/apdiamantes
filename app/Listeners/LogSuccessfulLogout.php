<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Request;

class LogSuccessfulLogout
{
    public function handle(Logout $event)
    {
        activity('logs')
            ->causedBy($event->user)
            ->withProperties([
                'accion' => 'logout',
                'ip' => Request::ip(),
                'user_agent' => Request::userAgent(),
                'fecha' => now()->toDateTimeString(),
            ])
            ->useLog('logs')
            ->tap(function (Activity $activity) {
                $activity->event = 'logout';
            })
            ->log('El usuario cerró sesión');
    }
}
