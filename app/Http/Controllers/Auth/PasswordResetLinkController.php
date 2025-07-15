<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    // Intentamos enviar el link de restablecimiento
    $status = Password::sendResetLink(
        $request->only('email')
    );

    // Intentamos obtener el usuario por correo
    $user = User::where('email', $request->email)->first();

    // Creamos la actividad para el intento de restablecimiento
    $activity = activity('auth')
        ->withProperties([
            'accion' => 'solicitud_reset_password',
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'fecha' => now()->toDateTimeString(),
            'correo_intentado' => $request->email,
        ])
        ->useLog('auth')
        ->tap(function (Activity $activity) {
            $activity->event = 'requested_password_reset';
        });

    if ($user) {
        $activity->causedBy($user);
    }

    $activity->log('Se solicitó el envío de correo para restablecer contraseña');

    return $status == Password::RESET_LINK_SENT
        ? back()->with('status', __($status))
        : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);
}

    /**
     * Handle an incoming api password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function apiStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user){
            throw ValidationException::withMessages([
                'email' => ['User with such email doesn\'t exist']
            ]);
        }

        return response('Password reset email successfully sent.');
    }
}
