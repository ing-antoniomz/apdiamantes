<?php

namespace App\Services;

use Hash;
use App\Models\User;
use App\Models\Grupo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendVerificationEmail;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserServices
{
    /**
     * Registra un nuevo usuario y su información asociada en el sistema.
     *
     * @param array $data Datos del usuario y sus archivos relacionados.
     * @return User Usuario creado.
     *
     * @throws HttpException Si ocurre un error durante el registro.
     */
    public static function storeUsuario(array $data): User
    {
        try {
            DB::beginTransaction();

            // Manejo de archivos con helper
            $avatarPath = self::storeFile($data['avatar'] ?? null, 'avatars');
            $inscripcionPath = self::storeFile($data['inscripcion'] ?? null, 'inscripciones');
            $credencialElectorPath = self::storeFile($data['ine'] ?? null, 'credenciales');
            $comprobanteDomicilioPath = self::storeFile($data['comprobante_domicilio'] ?? null, 'comprobantes');

            // Crear usuario
            $user = User::create([
                'user' => $data['user'] ?? null,
                'nombre' => $data['nombre'] ?? null,
                'apellido_paterno' => $data['apellido_paterno'] ?? null,
                'apellido_materno' => $data['apellido_materno'] ?? null,
                'cuenta_ap' => $data['cuenta_apdiamantes'] ?? null,
                'status' => !empty($data['estatus']),
                'password' => isset($data['password'])
                    ? Hash::make($data['password'])
                    : Hash::make('APDiamantes123'),
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
                'avatar' => $avatarPath,
                'inscripcion' => $inscripcionPath,
                'credencial_elector' => $credencialElectorPath,
                'comprobante_domicilio' => $comprobanteDomicilioPath,
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
                        'rol' => $data['posicion'] ?? null,
                        'fecha_ingreso' => now(),
                    ]);
                }
            }

            DB::commit();
            return $user;

        } catch (\Throwable $e) {
            DB::rollBack();
            \Log::error('US-001 - Registrar usuario | ' . __METHOD__ . " Archivo: " . $e->getFile() . ' Linea: ' . $e->getLine() . PHP_EOL . '-------> ' . $e->getMessage() . PHP_EOL . $e->getTraceAsString());
            throw new HttpException(500, 'US-001 - Error al registrar el usuario');
        }
    }

    /**
     * Almacena un archivo en la carpeta especificada si es válido.
     *
     * @param UploadedFile|null $file   Archivo a almacenar.
     * @param string            $folder Carpeta de destino.
     * @return string|null Ruta del archivo almacenado o null si no se guardó.
     */
    private static function storeFile($file, string $folder): ?string
    {
        return ($file instanceof UploadedFile) ? $file->store($folder, 'public') : null;
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

    /**
    * Actualiza la información de un usuario y sus datos relacionados, incluyendo archivos, roles y grupos.
    *
    * @param string $username  Nombre de usuario (campo 'user') para identificar el registro.
    * @param array  $data      Datos a actualizar (puede incluir campos del usuario, info relacionada, archivos, rol, grupo, etc.).
    * @return User
    *
    * @throws HttpException Si ocurre un error durante la transacción.
    */
    public static function updateUsuario(string $username, array $data): User
    {
        try {
            DB::beginTransaction();

            // Buscar usuario principal
            $user = User::where('user', $username)->firstOrFail();

            // Manejo de archivos
            // Manejo de avatar
            if (!empty($data['avatar_remove'])) {
                // Si se solicita eliminar el avatar
                if (!empty($user->info->avatar) && \Storage::disk('public')->exists($user->info->avatar)) {
                    \Storage::disk('public')->delete($user->info->avatar);
                }
                $avatarPath = null;
            } else {
                $avatarPath = self::handleFileUpdate($user->info->avatar ?? null, $data['avatar'] ?? null, 'avatars');
            }
            $inscripcionPath          = self::handleFileUpdate($user->info->inscripcion ?? null, $data['inscripcion'] ?? null, 'inscripciones');
            $credencialElectorPath    = self::handleFileUpdate($user->info->credencial_elector ?? null, $data['ine'] ?? null, 'credenciales');
            $comprobanteDomicilioPath = self::handleFileUpdate($user->info->comprobante_domicilio ?? null, $data['comprobante_domicilio'] ?? null, 'comprobantes');

            // Actualizar usuario principal (dispara eventos)
            $user->fill([
                'user'             => $data['user'] ?? $user->user,
                'nombre'           => $data['nombre'] ?? $user->nombre,
                'apellido_paterno' => $data['apellido_paterno'] ?? $user->apellido_paterno,
                'apellido_materno' => $data['apellido_materno'] ?? $user->apellido_materno,
                'cuenta_ap'        => $data['cuenta_apdiamantes'] ?? $user->cuenta_ap,
                'status'           => isset($data['estatus']) ? (bool)$data['estatus'] : $user->status,
                'email'            => $data['correo'] ?? $user->email,
            ]);
            if (!empty($data['password'])) {
                $user->password = Hash::make($data['password']);
            }
            $user->save(); // <- importante para que Spatie registre

            // Actualizar info relacionado (relación)
            $info = $user->info;
            $info->fill([
                'phone'                  => $data['telefono'] ?? $info->phone,
                'rfc'                    => $data['rfc'] ?? $info->rfc,
                'company'                => $data['company'] ?? $info->company,
                'persona_autorizada'     => $data['persona_autorizada'] ?? $info->persona_autorizada,
                'beneficiario1'          => $data['beneficiario1'] ?? $info->beneficiario1,
                'beneficiario2'          => $data['beneficiario2'] ?? $info->beneficiario2,
                'beneficiario1_parentesco'=> $data['parentescoBeneficiario1'] ?? $info->beneficiario1_parentesco,
                'beneficiario2_parentesco'=> $data['parentescoBeneficiario2'] ?? $info->beneficiario2_parentesco,
                'tipo_persona'           => $data['radioPersona'] ?? $info->tipo_persona,
                'cosolicitante'          => $data['cosolicitante'] ?? $info->cosolicitante,
                'cosolicitante_rfc'      => $data['cosolicitante_rfc'] ?? $info->cosolicitante_rfc,
                'banco'                  => $data['banco'] ?? $info->banco,
                'cuenta'                 => $data['cuenta'] ?? $info->cuenta,
                'sucursal'               => $data['sucursal'] ?? $info->sucursal,
                'titular_cuenta'         => $data['titular_cuenta'] ?? $info->titular_cuenta,
                'calle_fiscal'           => $data['direccion_fiscal_calle'] ?? $info->calle_fiscal,
                'numero_fiscal'          => $data['direccion_fiscal_numero'] ?? $info->numero_fiscal,
                'colonia_fiscal'         => $data['direccion_fiscal_colonia'] ?? $info->colonia_fiscal,
                'ciudad_fiscal'          => $data['direccion_fiscal_ciudad'] ?? $info->ciudad_fiscal,
                'estado_fiscal'          => $data['direccion_fiscal_estado'] ?? $info->estado_fiscal,
                'cp_fiscal'              => $data['direccion_fiscal_codigo_postal'] ?? $info->cp_fiscal,
                'telefono_fiscal'        => $data['direccion_fiscal_telefono_fiscal'] ?? $info->telefono_fiscal,
                'calle_envios'           => $data['direccion_envio_calle'] ?? $info->calle_envios,
                'numero_envios'          => $data['direccion_envio_numero'] ?? $info->numero_envios,
                'colonia_envios'         => $data['direccion_envio_colonia'] ?? $info->colonia_envios,
                'ciudad_envios'          => $data['direccion_envio_ciudad'] ?? $info->ciudad_envios,
                'estado_envios'          => $data['direccion_envio_estado'] ?? $info->estado_envios,
                'cp_envios'              => $data['direccion_envio_codigo_postal'] ?? $info->cp_envios,
                'telefono_envios'        => $data['direccion_envio_telefono_fiscal'] ?? $info->telefono_envios,
                'avatar'                 => $avatarPath,
                'inscripcion'            => $inscripcionPath,
                'credencial_elector'     => $credencialElectorPath,
                'comprobante_domicilio'  => $comprobanteDomicilioPath,
            ]);
            $info->save(); // <- actualiza info sin afectar los eventos en User

            // Roles
            if (!empty($data['nivel'])) {
                $user->syncRoles([$data['nivel']]);
            }

            // Grupos
            if (!empty($data['grupo'])) {
                $grupo = Grupo::where('name', $data['grupo'])->first();
                if ($grupo) {
                    $user->grupos()->sync([
                        $grupo->id => [
                            'rol'           => $data['posicion'] ?? null,
                            'fecha_ingreso' => now(),
                        ]
                    ]);
                }
            }

            DB::commit();
            return $user;

        } catch (\Throwable $e) {
            DB::rollBack();
            \Log::error(
                'US-002 - Actualizar usuario | ' . __METHOD__ .
                " Archivo: " . $e->getFile() . ' Línea: ' . $e->getLine() .
                PHP_EOL . '-------> ' . $e->getMessage() .
                PHP_EOL . $e->getTraceAsString()
            );
            throw new HttpException(500, 'US-002 - Error al actualizar el usuario');
        }
    }


    /**
     * Maneja la actualización de un archivo: elimina el anterior y guarda el nuevo.
     *
     * @param string|null       $oldPath   Ruta del archivo anterior en el disco (puede ser null si no existe).
     * @param UploadedFile|null $newFile   Nuevo archivo recibido en la solicitud (puede ser null si no se actualiza).
     * @param string            $folder    Carpeta donde se guardará el archivo.
     * @return string|null      Ruta del nuevo archivo o la ruta anterior si no se actualiza.
     */
    private static function handleFileUpdate(?string $oldPath, $newFile, string $folder): ?string
    {
        // Si se recibe un nuevo archivo
        if ($newFile instanceof UploadedFile) {
            // Si existe un archivo previo, eliminarlo del disco
            if ($oldPath && Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->delete($oldPath);
            }
            // Guardar nuevo archivo y devolver su ruta
            return $newFile->store($folder, 'public');
        }

        // Si no hay nuevo archivo, conservar la ruta anterior
        return $oldPath;
    }

}