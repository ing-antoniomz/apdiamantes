<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Grupo;
use App\Services\UserServices;

class StoreUsuarioTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_usuario_crea_usuario_con_avatar_rol_y_grupo()
    {
        Storage::fake('public');

        // Crear un grupo para asociarlo
        //$grupo = Grupo::factory()->create(['name' => 'grupo_prueba']);

        $data = [
            'user' => 'usuario_test',
            'nombre' => 'Juan',
            'apellido_paterno' => 'Pérez',
            'apellido_materno' => 'López',
            'cuenta_ap' => 'ap1234',
            'correo' => 'juan@example.com',
            'telefono' => '1234567890',
            'rfc' => 'XAXX010101000',
            'company' => 'MiEmpresa',
            'persona_autorizada' => 'Pedro Pérez',
            'beneficiario1' => 'Beneficiario Uno',
            'beneficiario2' => 'Beneficiario Dos',
            'radioPersona' => 'FISICA',
            'cosolicitante' => 'Ana López',
            'cosolicitante_rfc' => 'XEXX010101000',
            'banco' => 'BBVA',
            'cuenta' => '123456789',
            'sucursal' => 'Sucursal Norte',
            'titular_cuenta' => 'Juan Pérez',
            'direccion_fiscal_calle' => 'Calle F',
            'direccion_fiscal_numero' => '123',
            'direccion_fiscal_colonia' => 'Colonia A',
            'direccion_fiscal_ciudad' => 'CDMX',
            'direccion_fiscal_estado' => 'CDMX',
            'direccion_fiscal_codigo_postal' => '01000',
            'direccion_fiscal_telefono_fiscal' => '5512345678',
            'direccion_envio_calle' => 'Calle E',
            'direccion_envio_numero' => '456',
            'direccion_envio_colonia' => 'Colonia B',
            'direccion_envio_ciudad' => 'CDMX',
            'direccion_envio_estado' => 'CDMX',
            'direccion_envio_codigo_postal' => '02000',
            'direccion_envio_telefono_fiscal' => '5598765432',
            'avatar' => UploadedFile::fake()->image('avatar.jpg'),
            'nivel' => 'Distribuidor', // Asegúrate de que este rol exista
            'grupo' => 'Grupo Alpha',
            'grupo_rol' => 'MIEMBRO',
        ];

        // Si usas Spatie Laravel-permission asegúrate de que el rol exista
        //\Spatie\Permission\Models\Role::create(['name' => 'Distribuidor','descripcion' => 'prueba','volumen'=> '5000','imagen' => 'roles/role_distribuidor.png']);

        $user = UserServices::storeUsuario($data);

        // Verifica que el usuario fue creado
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('usuario_test', $user->user);
        $this->assertEquals('juan@example.com', $user->email);
        $this->assertTrue(Hash::check('APDiamantes2025', $user->password));

        // Verifica que el avatar fue guardado
        Storage::disk('public')->assertExists($user->info->avatar);

        // Verifica que info relacionada fue creada
        $this->assertEquals('1234567890', $user->info->phone);

        // Verifica que se asignó el rol
        $this->assertTrue($user->hasRole('Distribuidor'));

        // Verifica que está en el grupo con el rol correcto
        $this->assertDatabaseHas('grupo_usuario', [
            'user_id' => $user->id,
            'grupo_id' => 1,
            'rol' => 'MIEMBRO',
        ]);
    }
}
