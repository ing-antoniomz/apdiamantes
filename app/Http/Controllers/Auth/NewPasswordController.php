<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request, $token)
    {
        return view('auth.reset-password', compact('request', 'token'));
    }

    /**
     * Handle an incoming new password request.
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
        'token'    => 'required',
        'email'    => 'required|email',
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user) use ($request) {
            $user->forceFill([
                'password'       => Hash::make($request->password),
                'remember_token' => Str::random(60),
            ])->save();

            // Registrar actividad en el log de Spatie
            activity('auth')
                ->causedBy($user)
                ->performedOn($user)
                ->withProperties([
                    'accion'      => 'password_reset',
                    'ip'          => $request->ip(),
                    'user_agent'  => $request->userAgent(),
                    'fecha'       => now()->toDateTimeString(),
                ])
                ->useLog('auth')
                ->tap(function (Activity $activity) {
                    $activity->event = 'password_reset';
                })
                ->log('El usuario restableció su contraseña');

            event(new PasswordReset($user));
        }
    );

    switch ($status) {
        case Password::PASSWORD_RESET: // Autenticación exitosa
            return response()->json([
                'message' => __('Password change successful. You will be redirected to login')
            ], 200);

        case Password::INVALID_USER: // Usuario no encontrado
            return response()->json([
                'message' => __('The data entered does not match our records')
            ], 404);

        case Password::INVALID_TOKEN: // Token inválido
            return response()->json([
                'message' => __('The token has expired or is invalid')
            ], 400);

        default:
            return response()->json([
                'message' => __('Something strange happened').' NPC-01.'
            ], 422);
    }
}
}
