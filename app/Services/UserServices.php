<?php

namespace App\Services;

use Hash;
use App\Models\User;
use App\Models\Grupo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendVerificationEmail;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserServices
{
    /**
     * Método estático para registrar un nuevo usuario en el sistema.
     *
     * @param array $data Datos necesarios para registrar al usuario. Incluye:
     *  - string|null 'user' Nombre de usuario.
     *  - string|null 'nombre' Nombre del usuario.
     *  - string|null 'apellido_paterno' Apellido paterno.
     *  - string|null 'apellido_materno' Apellido materno.
     *  - string|null 'cuenta_ap' Cuenta asociada al usuario.
     *  - string|null 'correo' Correo electrónico del usuario.
     *  - UploadedFile|null 'avatar' Archivo del avatar del usuario.
     *  - string|null 'telefono' Teléfono del usuario.
     *  - string|null 'rfc' RFC del usuario.
     *  - string|null 'company' Empresa asociada al usuario.
     *  - string|null 'persona_autorizada' Persona autorizada.
     *  - string|null 'beneficiario1' Primer beneficiario.
     *  - string|null 'beneficiario2' Segundo beneficiario.
     *  - string|null 'radioPersona' Tipo de persona (física o moral).
     *  - string|null 'cosolicitante' Co-solicitante.
     *  - string|null 'cosolicitante_rfc' RFC del co-solicitante.
     *  - string|null 'banco' Banco del usuario.
     *  - string|null 'cuenta' Número de cuenta bancaria.
     *  - string|null 'sucursal' Sucursal bancaria.
     *  - string|null 'titular_cuenta' Titular de la cuenta bancaria.
     *  - string|null 'direccion_fiscal_*' Datos de la dirección fiscal (calle, número, colonia, etc.).
     *  - string|null 'direccion_envio_*' Datos de la dirección de envío (calle, número, colonia, etc.).
     *  - string|null 'nivel' Rol que se asignará al usuario.
     *  - string|null 'grupo' Grupo al que se asociará el usuario.
     *  - string|null 'grupo_rol' Rol del usuario dentro del grupo.
     *
     * @return User El usuario creado.
     *
     * @throws HttpException Si ocurre un error durante el registro.
     */
    public static function storeUsuario(array $data): User
    {
        try {
            DB::beginTransaction();

            // Procesar archivos si se proporcionan
            $avatarPath = null;
            $inscripcionPath = null;
            $credencialElectorPath = null;
            $comprobanteDomicilioPath = null;

            if (isset($data['avatar']) && $data['avatar'] instanceof UploadedFile) {
                $avatarPath = $data['avatar']->store('avatars', 'public');
            }

            if (isset($data['inscripcion']) && $data['inscripcion'] instanceof UploadedFile) {
                $inscripcionPath = $data['inscripcion']->store('inscripciones', 'public');
            }

            if (isset($data['ine']) && $data['ine'] instanceof UploadedFile) {
                $credencialElectorPath = $data['ine']->store('credenciales', 'public');
            }

            if (isset($data['comprobante_domicilio']) && $data['comprobante_domicilio'] instanceof UploadedFile) {
                $comprobanteDomicilioPath = $data['comprobante_domicilio']->store('comprobantes', 'public');
            }

            // Crear usuario
            $user = User::create([
                'user' => $data['user'] ?? null,
                'nombre' => $data['nombre'] ?? null,
                'apellido_paterno' => $data['apellido_paterno'] ?? null,
                'apellido_materno' => $data['apellido_materno'] ?? null,
                'cuenta_ap' => $data['cuenta_apdiamantes'] ?? null,
                'status' => isset($data['estatus']) ? true : false,
                'password' => Hash::make('APDiamantes2025'),
                'email' => $data['correo'] ?? null,
            ]);

            // Crear info relacionada
            $user->info()->create([
                'phone' => $data['telefono'] ?? null,
                'rfc' => $data['rfc'] ?? null,
                'company' => $data['company'] ?? null,
                'persona_autorizada' => $data['persona_autorizada'] ?? null,
                'beneficiario1' => $data['beneficiario1'] ?? null,
                'beneficiario2' => $data['beneficiario2'] ?? null,
                'beneficiario1_parentesco' => $data['parentescoBeneficiario1'] ?? null,
                'beneficiario2_parentesco' => $data['parentescoBeneficiario2'] ?? null,
                'tipo_persona' => $data['radioPersona'] ?? null,
                'cosolicitante' => $data['cosolicitante'] ?? null,
                'cosolicitante_rfc' => $data['cosolicitante_rfc'] ?? null,
                'banco' => $data['banco'] ?? null,
                'cuenta' => $data['cuenta'] ?? null,
                'sucursal' => $data['sucursal'] ?? null,
                'titular_cuenta' => $data['titular_cuenta'] ?? null,
                'calle_fiscal' => $data['direccion_fiscal_calle'] ?? null,
                'numero_fiscal' => $data['direccion_fiscal_numero'] ?? null,
                'colonia_fiscal' => $data['direccion_fiscal_colonia'] ?? null,
                'ciudad_fiscal' => $data['direccion_fiscal_ciudad'] ?? null,
                'estado_fiscal' => $data['direccion_fiscal_estado'] ?? null,
                'cp_fiscal' => $data['direccion_fiscal_codigo_postal'] ?? null,
                'telefono_fiscal' => $data['direccion_fiscal_telefono_fiscal'] ?? null,
                'calle_envios' => $data['direccion_envio_calle'] ?? null,
                'numero_envios' => $data['direccion_envio_numero'] ?? null,
                'colonia_envios' => $data['direccion_envio_colonia'] ?? null,
                'ciudad_envios' => $data['direccion_envio_ciudad'] ?? null,
                'estado_envios' => $data['direccion_envio_estado'] ?? null,
                'cp_envios' => $data['direccion_envio_codigo_postal'] ?? null,
                'telefono_envios' => $data['direccion_envio_telefono_fiscal'] ?? null,
                'avatar' => $avatarPath ?? null,
                'inscripcion' => $inscripcionPath ?? null,
                'credencial_elector' => $credencialElectorPath ?? null,
                'comprobante_domicilio' => $comprobanteDomicilioPath ?? null,
            ]);

            // Asignar rol
            if (!empty($data['nivel'])) {
                $user->assignRole($data['nivel']);
            }

            // Asignar grupo
            if (!empty($data['grupo'])) {
                $grupo = Grupo::where('name', $data['grupo'])->first();

                if ($grupo) {
                    $user->grupos()->attach($grupo->id, [
                        'rol' => $data['posicion'] ?? null, // o lo que venga en $data['rol']
                        'fecha_ingreso' => now(),
                    ]);
                }
            }

            DB::commit();

            return $user;
        } catch (\Throwable $e) {
            DB::rollBack();

            \Log::error('US-001 - Registrar usuario | '. __METHOD__. " Archivo: " . $e->getFile() . ' Linea: '. $e->getLine() . PHP_EOL. '-------> '.$e->getMessage() . PHP_EOL . $e->getTraceAsString());
            throw new HttpException(500, 'US-001 - Error al registrar el usuario');
        }
    }

    /**
     * Envia Correo de activacion de usuario
     * @param  string  $username
     *
     * @return array El usuario activado
     */

    public static function activateUser(string $username): array
    {
        try {
            $user = User::where('user', $username)->firstOrFail();

            if ($user->hasVerifiedEmail()) {
                return [
                    'success' => false,
                    'message' => 'El correo ya está verificado.',
                    'code' => '400',
                    'user' => $user,
                ];
            }

            // Enviar correo de verificación de forma asincrónica
            dispatch(new SendVerificationEmail($user));

            // Registrar en activity log
            activity()
                ->causedBy(auth()->user() ?? $user)
                ->performedOn($user)
                ->withProperties([
                    'accion' => 'reenviar_correo_verificacion',
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                    'fecha' => now()->toDateTimeString(),
                ])
                ->log('Se envió el correo de verificación al usuario');

            return [
                'success' => true,
                'message' => 'Correo de verificación en proceso de envío.',
                'code' => '200',
                'user' => $user,
            ];
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            \Log::warning('Usuario no encontrado para enviar verificación.', [
                'username' => $username,
                'error' => $e->getMessage(),
            ]);
            return [
                'success' => false,
                'message' => 'Usuario no encontrado.',
                'code' => '404',
                'user' => null,
            ];
        } catch (\Exception $e) {
            \Log::error('US-002 - Error al procesar el correo de verificación | '. __METHOD__. " Archivo: " . $e->getFile() . ' Linea: '. $e->getLine() . PHP_EOL. '-------> '.$e->getMessage() . PHP_EOL . $e->getTraceAsString());\Log::error('US-002 - Error al procesar el correo de verificación | '. __METHOD__. " Archivo: " . $e->getFile() . ' Linea: '. $e->getLine() . PHP_EOL. '-------> '.$e->getMessage() . PHP_EOL . $e->getTraceAsString());
            return [
                'success' => false,
                'message' => 'Error al enviar el correo de verificación.',
                'code' => '500',
                'user' => null,
            ];
        }
    }
}