<?php

namespace App\Services;

use Hash;
use App\Models\User;
use App\Models\Grupo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
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

            // Procesar el avatar si se proporciona
            $avatarPath = null;
            if (isset($data['avatar']) && $data['avatar'] instanceof UploadedFile) {
                $avatarPath = $data['avatar']->store('avatars', 'public');
            }

            // Crear usuario
            $user = User::create([
                'user' => $data['user'] ?? null,
                'nombre' => $data['nombre'] ?? null,
                'apellido_paterno' => $data['apellido_paterno'] ?? null,
                'apellido_materno' => $data['apellido_materno'] ?? null,
                'cuenta_ap' => $data['cuenta_ap'] ?? null,
                'status' => false,
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
                        'rol' => $data['grupo_rol'] ?? null, // o lo que venga en $data['rol']
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
}