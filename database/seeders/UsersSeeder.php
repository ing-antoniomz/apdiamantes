<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use App\Models\Grupo;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    private array $data;
    private object $grupos;

    public function __construct()
    {
        $this->data = $this->data();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {

        $adminUser = User::create([
            'user'              => 'apdiamantes',
            'nombre'            => 'Andra',
            'apellido_paterno'  => 'Pérez',
            'apellido_materno'  => 'Ortega',
            'cuenta_ap'  => 'APD2500000001',
            'email'             => 'admin@apdiamantes.com',
            'status'            => true,
            'password'          => Hash::make('apdiamantes'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('admin@apdiamantes'),
        ]);
        $this->addDummyInfo($faker, $adminUser, $this->data['apdiamantes']);
        $adminUser->assignRole('Administrador');
        $grupo1 = Grupo::create([
            'name' => 'Grupo Alpha',
            'descripcion' => 'Grupo de desarrollo',
            'imagen' => 'perrito_coin.svg',
            'creador_id' => 1,
            'status' => true,
        ]);
        $grupo1->usuarios()->attach($adminUser->id, [
            'rol' => 'ADMINISTRADOR',
            'fecha_ingreso' => now(),
        ]);

        $distribuidorUser = User::create([
            'user'              => 'distribuidor',
            'nombre'            => 'Luis',
            'apellido_paterno'  => 'Díaz',
            'apellido_materno'  => 'González',
            'cuenta_ap'  => 'APD2500000002',
            'email'             => 'distribuidor@gmail.com',
            'status'            => true,
            'password'          => Hash::make('distribuidor'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('luisdg@gmail'),
        ]);
        $this->addDummyInfo($faker, $distribuidorUser, $this->data['distribuidor']);
        $distribuidorUser->assignRole('Distribuidor');
        $grupo1->usuarios()->attach($distribuidorUser->id, [
            'rol' => 'MIEMBRO',
            'fecha_ingreso' => now(),
        ]);

        $supervisorUser = User::create([
            'user'              => 'supervisor',
            'nombre'            => 'Juan',
            'apellido_paterno'  => 'Pérez',
            'apellido_materno'  => 'Gómez',
            'cuenta_ap'  => 'APD2500000003',
            'email'             => 'supervisor@gmail.com',
            'status'            => true,
            'password'          => Hash::make('supervisor'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('juanperez@gmail'),
        ]);
        $this->addDummyInfo($faker, $supervisorUser, $this->data['supervisor']);
        $supervisorUser->assignRole('Supervisor');
        $grupo1->usuarios()->attach($supervisorUser->id, [
            'rol' => 'MIEMBRO',
            'fecha_ingreso' => now(),
        ]);

        $gerenteUser = User::create([
            'user'              => 'gerente',
            'nombre'            => 'María',
            'apellido_paterno'  => 'Gómez',
            'apellido_materno'  => 'Martínez',
            'cuenta_ap'  => 'APD2500000004',
            'email'             => 'gerente@gmail.com',
            'status'            => true,
            'password'          => Hash::make('gerente'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('mariagomez@gmail'),
        ]);
        $this->addDummyInfo($faker, $gerenteUser, $this->data['gerente']);
        $gerenteUser->assignRole('Gerente');
        $grupo1->usuarios()->attach($gerenteUser->id, [
            'rol' => 'MIEMBRO',
            'fecha_ingreso' => now(),
        ]);

        $directorUser = User::create([
            'user'              => 'director',
            'nombre'            => 'Carlos',
            'apellido_paterno'  => 'Martínez',
            'apellido_materno'  => 'Sánchez',
            'cuenta_ap'  => 'APD2500000005',
            'email'             => 'director@gmail.com',
            'status'            => true,
            'password'          => Hash::make('director'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('carlosmartinez@gmail'),
        ]);
        $this->addDummyInfo($faker, $directorUser, $this->data['director']);
        $directorUser->assignRole('Director');
        $grupo1->usuarios()->attach($directorUser->id, [
            'rol' => 'MIEMBRO',
            'fecha_ingreso' => now(),
        ]);

        $oroUser = User::create([
            'user'              => 'oro',
            'nombre'            => 'Roberto',
            'apellido_paterno'  => 'Díaz',
            'apellido_materno'  => 'Martín',
            'cuenta_ap'  => 'APD2500000006',
            'email'             => 'oro@gmail.com',
            'status'            => true,
            'password'          => Hash::make('oro'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('robertdiaz@gmail'),
        ]);
        $this->addDummyInfo($faker, $oroUser, $this->data['oro']);
        $oroUser->assignRole('Oro');
        $grupo1->usuarios()->attach($oroUser->id, [
            'rol' => 'ESTRELLA',
            'fecha_ingreso' => now(),
        ]);

        $platinoUser = User::create([
            'user'              => 'platino',
            'nombre'            => 'Elena',
            'apellido_paterno'  => 'Gómez',
            'apellido_materno'  => 'Ramírez',
            'cuenta_ap'  => 'APD2500000007',
            'email'             => 'platino@gmail.com',
            'status'            => true,
            'password'          => Hash::make('platino'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('elenagomez@gmail'),
        ]);
        $this->addDummyInfo($faker, $platinoUser, $this->data['platino']);
        $platinoUser->assignRole('Platino');
        $grupo1->usuarios()->attach($platinoUser->id, [
            'rol' => 'ESTRELLA',
            'fecha_ingreso' => now(),
        ]);

        $diamanteIntUser = User::create([
            'user'              => 'diamante_int',
            'nombre'            => 'Sofía',
            'apellido_paterno'  => 'Rodríguez',
            'apellido_materno'  => 'García',
            'cuenta_ap'  => 'APD2500000008',
            'email'             => 'diamante_int@gmail.com',
            'status'            => true,
            'password'          => Hash::make('diamante_int'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('sofiarodriguez@gmail'),
        ]);
        $this->addDummyInfo($faker, $diamanteIntUser, $this->data['diamante_int']);
        $diamanteIntUser->assignRole('Diamante INT');
        $grupo2 = Grupo::create([
            'name' => 'Grupo Beta',
            'descripcion' => 'Grupo de diseño',
            'imagen' => 'dogecoin.svg',
            'creador_id' => 8,
            'status' => true,
        ]);
        $grupo2->usuarios()->attach($diamanteIntUser->id, [
            'rol' => 'ADMINISTRADOR',
            'fecha_ingreso' => now(),
        ]);

        $distribuidor2User = User::create([
            'user'              => 'distribuidor2',
            'nombre'            => 'Michi',
            'apellido_paterno'  => 'Vertz',
            'apellido_materno'  => 'González',
            'cuenta_ap'  => 'APD2500000009',
            'email'             => 'distribuidor2@gmail.com',
            'status'            => true,
            'password'          => Hash::make('distribuidor2'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('luisdg2@gmail'),
        ]);
        $this->addDummyInfo($faker, $distribuidor2User, $this->data['distribuidor2']);
        $distribuidor2User->assignRole('Distribuidor');
        $grupo2->usuarios()->attach($distribuidor2User->id, [
            'rol' => 'MIEMBRO',
            'fecha_ingreso' => now(),
        ]);

        $diamanteUser = User::create([
            'user'              => 'diamante',
            'nombre'            => 'Luis',
            'apellido_paterno'  => 'Pérez',
            'apellido_materno'  => 'González',
            'cuenta_ap'  => 'APD2500000010',
            'email'             => 'diamante@gmail.com',
            'status'            => true,
            'password'          => Hash::make('diamante'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('luisperez@gmail'),
        ]);
        $this->addDummyInfo($faker, $diamanteUser, $this->data['diamante']);
        $diamanteUser->assignRole('Diamante');
        $grupo2->usuarios()->attach($diamanteUser->id, [
            'rol' => 'ESTRELLA',
            'fecha_ingreso' => now(),
        ]);
    }


    private function addDummyInfo(Generator $faker, User $user,$data=null)
    {
        $dummyInfo = [
            'avatar' => !empty($data['avatar']) ? $data['avatar'] : 'demo3/media/avatars/300-11.jpg',
            'phone' => !empty($data['phone']) ? $data['phone'] : $faker->phoneNumber,
            'tipo_persona' => !empty($data['tipo_persona']) ? $data['tipo_persona'] : 'FISICA',
            'company' => !empty($data['company']) ? $data['company'] : $faker->company,
            'rfc' => !empty($data['rfc']) ? $data['rfc'] : $faker->word,
            'cosolicitante' => !empty($data['cosolicitante']) ? $data['cosolicitante'] : $faker->name,
            'cosolicitante_rfc' => !empty($data['cosolicitante_rfc']) ? $data['cosolicitante_rfc'] : $faker->word,
            'persona_autorizada' => !empty($data['persona_autorizada']) ? $data['persona_autorizada'] : $faker->name,
            'calle_fiscal' => !empty($data['calle_fiscal']) ? $data['calle_fiscal'] : $faker->streetName,
            'numero_fiscal' => !empty($data['numero_fiscal']) ? $data['numero_fiscal'] : $faker->buildingNumber,
            'colonia_fiscal' => !empty($data['colonia_fiscal']) ? $data['colonia_fiscal'] : $faker->city,
            'ciudad_fiscal' => !empty($data['ciudad_fiscal']) ? $data['ciudad_fiscal'] : $faker->city,
            'estado_fiscal' => !empty($data['estado_fiscal']) ? $data['estado_fiscal'] : $faker->state,
            'cp_fiscal' => !empty($data['cp_fiscal']) ? $data['cp_fiscal'] : $faker->postcode,
            'telefono_fiscal' => !empty($data['telefono_fiscal']) ? $data['telefono_fiscal'] : $faker->phoneNumber,
            'calle_envios' => !empty($data['calle_envios']) ? $data['calle_envios'] : $faker->streetName,
            'numero_envios' => !empty($data['numero_envios']) ? $data['numero_envios'] : $faker->buildingNumber,
            'colonia_envios' => !empty($data['colonia_envios']) ? $data['colonia_envios'] : $faker->city,
            'ciudad_envios' => !empty($data['ciudad_envios']) ? $data['ciudad_envios'] : $faker->city,
            'estado_envios' => !empty($data['estado_envios']) ? $data['estado_envios'] : $faker->state,
            'cp_envios' => !empty($data['cp_envios']) ? $data['cp_envios'] : $faker->postcode,
            'telefono_envios' => !empty($data['telefono_envios']) ? $data['telefono_envios'] : $faker->phoneNumber,
            'banco' => !empty($data['banco']) ? $data['banco'] : $faker->company,
            'cuenta' => !empty($data['cuenta']) ? $data['cuenta'] : $faker->bankAccountNumber,
            'sucursal' => !empty($data['sucursal']) ? $data['sucursal'] : $faker->bankAccountNumber,
            'titular_cuenta' => !empty($data['titular_cuenta']) ? $data['titular_cuenta'] : $faker->name,
            'beneficiario1' => !empty($data['beneficiario1']) ? $data['beneficiario1'] : $faker->name,
            'beneficiario1_parentesco' => !empty($data['beneficiario1_parentesco']) ? $data['beneficiario1_parentesco'] : $faker->word,
            'beneficiario2' => !empty($data['beneficiario2']) ? $data['beneficiario2'] : $faker->name,
            'beneficiario2_parentesco' => !empty($data['beneficiario2_parentesco']) ? $data['beneficiario2_parentesco'] : $faker->word,
            'inscripcion' => !empty($data['inscripcion']) ? $data['inscripcion'] : $faker->imageUrl(),
            'credencial_elector' => !empty($data['credencial_elector']) ? $data['credencial_elector'] : $faker->imageUrl(),
            'comprobante_domicilio' => !empty($data['comprobante_domicilio']) ? $data['comprobante_domicilio'] : $faker->imageUrl(),
        ];

        $info = new UserInfo();
        foreach ($dummyInfo as $key => $value) {
            $info->$key = $value;
        }
        $info->user()->associate($user);
        $info->save();
    }

    private function data():array
    {
        $data['apdiamantes'] = [
            'avatar' => 'demo3/media/avatars/300-10.jpg',
            'phone' => '55 2884 4586',
            'tipo_persona' => 'MORAL',
            'company' => 'AP Diamantes',
            'rfc' => 'APO1802139A1',
            'cosolicitante' => 'Luisa Pérez Ortega',
            'cosolicitante_rfc' => 'PEOL1802139A1',
            'persona_autorizada' => 'Luisa Pérez Ortega',
            'calle_fiscal' => 'Calle 1',
            'numero_fiscal' => '1',
            'colonia_fiscal' => 'Colonia 1',
            'ciudad_fiscal' => 'Ciudad 1',
            'estado_fiscal' => 'Estado 1',
            'cp_fiscal' => '12345',
            'telefono_fiscal' => '55 2884 4586',
            'calle_envios' => 'Calle 2',
            'numero_envios' => '2',
            'colonia_envios' => 'Colonia 2',
            'ciudad_envios' => 'Ciudad 2',
            'estado_envios' => 'Estado 2',
            'cp_envios' => '54321',
            'telefono_envios' => '55 2884 4586',
            'banco' => 'Banamex',
            'cuenta' => '1234567890',
            'sucursal' => '1234',
            'titular_cuenta' => 'Andra Pérez Ortega',
            'beneficiario1' => 'Luisa Pérez Ortega',
            'beneficiario1_parentesco' => 'Madre',
            'beneficiario2' => 'Luis Pérez Ortega',
            'beneficiario2_parentesco' => 'Padre',
            'inscripcion' => 'apdiamantes_inscripcion.jpg',
            'credencial_elector' => 'apdiamantes_credencial_elector.jpg',
            'comprobante_domicilio' => 'apdiamantes_comprobante_domicilio.jpg',
        ];
        $data['distribuidor'] = [
            'avatar' => 'demo3/media/avatars/300-7.jpg',
            'phone' => '55 9054 2387',
            'tipo_persona' => 'FISICA',
            'company' => 'AP Distribuidor',
            'rfc' => 'APO1802139A2',
            'cosolicitante' => 'Juan Rodríguez Pérez',
            'cosolicitante_rfc' => 'ROPO1802132A1',
            'persona_autorizada' => 'Elena Pérez Rodríguez',
            'calle_fiscal' => 'Calle 2',
            'numero_fiscal' => '2',
            'colonia_fiscal' => 'Colonia 2',
            'ciudad_fiscal' => 'Ciudad 2',
            'estado_fiscal' => 'Estado 3',
            'cp_fiscal' => '12345',
            'telefono_fiscal' => '55 3457 2342',
            'calle_envios' => 'Calle 3',
            'numero_envios' => '3',
            'colonia_envios' => 'Colonia 3',
            'ciudad_envios' => 'Ciudad 3',
            'estado_envios' => 'Estado 3',
            'cp_envios' => '54321',
            'telefono_envios' => '55 6784 2345',
            'banco' => 'Banamex',
            'cuenta' => '2456543675',
            'sucursal' => '1234',
            'titular_cuenta' => 'Luis Diaz González',
            'beneficiario1' => 'Elena Pérez Rodríguez',
            'beneficiario1_parentesco' => 'Hija',
            'beneficiario2' => '',
            'beneficiario2_parentesco' => '',
            'inscripcion' => 'distribuidor_inscripcion.jpg',
            'credencial_elector' => 'distribuidor_credencial_elector.jpg',
            'comprobante_domicilio' => 'distribuidor_comprobante_domicilio.jpg',
        ];
        $data['supervisor'] = [
            'avatar' => 'demo3/media/avatars/300-3.jpg',
            'phone' => '55 1234 5678',
            'tipo_persona' => 'MORAL',
            'company' => 'Supervisor Co.',
            'rfc' => 'SUP1802139A1',
            'cosolicitante' => 'Juan Pérez',
            'cosolicitante_rfc' => 'JPEO1802139A1',
            'persona_autorizada' => 'Juan Pérez',
            'calle_fiscal' => 'Calle 3',
            'numero_fiscal' => '3',
            'colonia_fiscal' => 'Colonia 3',
            'ciudad_fiscal' => 'Ciudad 3',
            'estado_fiscal' => 'Estado 3',
            'cp_fiscal' => '54321',
            'telefono_fiscal' => '55 1234 5678',
            'calle_envios' => 'Calle 4',
            'numero_envios' => '4',
            'colonia_envios' => 'Colonia 4',
            'ciudad_envios' => 'Ciudad 4',
            'estado_envios' => 'Estado 4',
            'cp_envios' => '67890',
            'telefono_envios' => '55 1234 5678',
            'banco' => 'Banorte',
            'cuenta' => '9876543210',
            'sucursal' => '4321',
            'titular_cuenta' => 'Juan Pérez',
            'beneficiario1' => 'Ana Pérez',
            'beneficiario1_parentesco' => 'Esposa',
            'beneficiario2' => 'Carlos Pérez',
            'beneficiario2_parentesco' => 'Hermano',
            'inscripcion' => 'supervisor_inscripcion.jpg',
            'credencial_elector' => 'supervisor_credencial_elector.jpg',
            'comprobante_domicilio' => 'supervisor_comprobante_domicilio.jpg',
        ];
        $data['gerente'] = [
            'avatar' => 'demo3/media/avatars/300-29.jpg',
            'phone' => '55 2345 6789',
            'tipo_persona' => 'MORAL',
            'company' => 'Gerente Co.',
            'rfc' => 'GER1802139A1',
            'cosolicitante' => 'María Gómez',
            'cosolicitante_rfc' => 'MGOE1802139A1',
            'persona_autorizada' => 'María Gómez',
            'calle_fiscal' => 'Calle 5',
            'numero_fiscal' => '5',
            'colonia_fiscal' => 'Colonia 5',
            'ciudad_fiscal' => 'Ciudad 5',
            'estado_fiscal' => 'Estado 5',
            'cp_fiscal' => '54322',
            'telefono_fiscal' => '55 2345 6789',
            'calle_envios' => 'Calle 6',
            'numero_envios' => '6',
            'colonia_envios' => 'Colonia 6',
            'ciudad_envios' => 'Ciudad 6',
            'estado_envios' => 'Estado 6',
            'cp_envios' => '67891',
            'telefono_envios' => '55 2345 6789',
            'banco' => 'Santander',
            'cuenta' => '1122334455',
            'sucursal' => '9876',
            'titular_cuenta' => 'María Gómez',
            'beneficiario1' => 'José Gómez',
            'beneficiario1_parentesco' => 'Esposo',
            'beneficiario2' => 'Pedro Gómez',
            'beneficiario2_parentesco' => 'Hermano',
            'inscripcion' => 'gerente_inscripcion.jpg',
            'credencial_elector' => 'gerente_credencial_elector.jpg',
            'comprobante_domicilio' => 'gerente_comprobante_domicilio.jpg',
        ];
        $data['director'] = [
            'avatar' => 'demo3/media/avatars/300-18.jpg',
            'phone' => '55 3456 7890',
            'tipo_persona' => 'MORAL',
            'company' => 'Director Co.',
            'rfc' => 'DIR1802139A1',
            'cosolicitante' => 'Carlos Martínez',
            'cosolicitante_rfc' => 'CMA1802139A1',
            'persona_autorizada' => 'Carlos Martínez',
            'calle_fiscal' => 'Calle 7',
            'numero_fiscal' => '7',
            'colonia_fiscal' => 'Colonia 7',
            'ciudad_fiscal' => 'Ciudad 7',
            'estado_fiscal' => 'Estado 7',
            'cp_fiscal' => '54323',
            'telefono_fiscal' => '55 3456 7890',
            'calle_envios' => 'Calle 8',
            'numero_envios' => '8',
            'colonia_envios' => 'Colonia 8',
            'ciudad_envios' => 'Ciudad 8',
            'estado_envios' => 'Estado 8',
            'cp_envios' => '67892',
            'telefono_envios' => '55 3456 7890',
            'banco' => 'BBVA',
            'cuenta' => '5566778899',
            'sucursal' => '8765',
            'titular_cuenta' => 'Carlos Martínez',
            'beneficiario1' => 'Ana Martínez',
            'beneficiario1_parentesco' => 'Esposa',
            'beneficiario2' => 'Luis Martínez',
            'beneficiario2_parentesco' => 'Hermano',
            'inscripcion' => 'director_inscripcion.jpg',
            'credencial_elector' => 'director_credencial_elector.jpg',
            'comprobante_domicilio' => 'director_comprobante_domicilio.jpg',
        ];
        $data['oro'] = [
            'avatar' => 'demo3/media/avatars/300-22.jpg',
            'phone' => '55 4567 8901',
            'tipo_persona' => 'MORAL',
            'company' => 'Oro Co.',
            'rfc' => 'ORO1802139A1',
            'cosolicitante' => 'Roberto Díaz',
            'cosolicitante_rfc' => 'RDO1802139A1',
            'persona_autorizada' => 'Roberto Díaz',
            'calle_fiscal' => 'Calle 9',
            'numero_fiscal' => '9',
            'colonia_fiscal' => 'Colonia 9',
            'ciudad_fiscal' => 'Ciudad 9',
            'estado_fiscal' => 'Estado 9',
            'cp_fiscal' => '54324',
            'telefono_fiscal' => '55 4567 8901',
            'calle_envios' => 'Calle 10',
            'numero_envios' => '10',
            'colonia_envios' => 'Colonia 10',
            'ciudad_envios' => 'Ciudad 10',
            'estado_envios' => 'Estado 10',
            'cp_envios' => '67893',
            'telefono_envios' => '55 4567 8901',
            'banco' => 'Scotiabank',
            'cuenta' => '2233445566',
            'sucursal' => '7654',
            'titular_cuenta' => 'Roberto Díaz',
            'beneficiario1' => 'Laura Díaz',
            'beneficiario1_parentesco' => 'Esposa',
            'beneficiario2' => 'Raúl Díaz',
            'beneficiario2_parentesco' => 'Hermano',
            'inscripcion' => 'oro_inscripcion.jpg',
            'credencial_elector' => 'oro_credencial_elector.jpg',
            'comprobante_domicilio' => 'oro_comprobante_domicilio.jpg',
        ];
        $data['platino'] = [
            'avatar' => 'demo3/media/avatars/300-8.jpg',
            'phone' => '55 5678 9012',
            'tipo_persona' => 'MORAL',
            'company' => 'Platino Co.',
            'rfc' => 'PLA1802139A1',
            'cosolicitante' => 'Elena Gómez',
            'cosolicitante_rfc' => 'EGO1802139A1',
            'persona_autorizada' => 'Elena Gómez',
            'calle_fiscal' => 'Calle 11',
            'numero_fiscal' => '11',
            'colonia_fiscal' => 'Colonia 11',
            'ciudad_fiscal' => 'Ciudad 11',
            'estado_fiscal' => 'Estado 11',
            'cp_fiscal' => '54325',
            'telefono_fiscal' => '55 5678 9012',
            'calle_envios' => 'Calle 12',
            'numero_envios' => '12',
            'colonia_envios' => 'Colonia 12',
            'ciudad_envios' => 'Ciudad 12',
            'estado_envios' => 'Estado 12',
            'cp_envios' => '67894',
            'telefono_envios' => '55 5678 9012',
            'banco' => 'HSBC',
            'cuenta' => '3344556677',
            'sucursal' => '6543',
            'titular_cuenta' => 'Elena Gómez',
            'beneficiario1' => 'Marta Gómez',
            'beneficiario1_parentesco' => 'Hermana',
            'beneficiario2' => 'Luis Gómez',
            'beneficiario2_parentesco' => 'Padre',
            'inscripcion' => 'platino_inscripcion.jpg',
            'credencial_elector' => 'platino_credencial_elector.jpg',
            'comprobante_domicilio' => 'platino_comprobante_domicilio.jpg',
        ];
        $data['diamante'] = [
            'avatar' => 'demo3/media/avatars/300-7.jpg',
            'phone' => '55 6789 0123',
            'tipo_persona' => 'MORAL',
            'company' => 'Diamante Co.',
            'rfc' => 'DIA1802139A1',
            'cosolicitante' => 'Luis Pérez',
            'cosolicitante_rfc' => 'LPEO1802139A1',
            'persona_autorizada' => 'Luis Pérez',
            'calle_fiscal' => 'Calle 13',
            'numero_fiscal' => '13',
            'colonia_fiscal' => 'Colonia 13',
            'ciudad_fiscal' => 'Ciudad 13',
            'estado_fiscal' => 'Estado 13',
            'cp_fiscal' => '54326',
            'telefono_fiscal' => '55 6789 0123',
            'calle_envios' => 'Calle 14',
            'numero_envios' => '14',
            'colonia_envios' => 'Colonia 14',
            'ciudad_envios' => 'Ciudad 14',
            'estado_envios' => 'Estado 14',
            'cp_envios' => '67895',
            'telefono_envios' => '55 6789 0123',
            'banco' => 'Citibanamex',
            'cuenta' => '4455667788',
            'sucursal' => '5432',
            'titular_cuenta' => 'Luis Pérez',
            'beneficiario1' => 'Carlos Pérez',
            'beneficiario1_parentesco' => 'Hermano',
            'beneficiario2' => 'José Pérez',
            'beneficiario2_parentesco' => 'Padre',
            'inscripcion' => 'diamante_inscripcion.jpg',
            'credencial_elector' => 'diamante_credencial_elector.jpg',
            'comprobante_domicilio' => 'diamante_comprobante_domicilio.jpg',
        ];
        $data['diamante_int'] = [
            'avatar' => 'demo3/media/avatars/300-1.jpg',
            'phone' => '55 7890 1234',
            'tipo_persona' => 'MORAL',
            'company' => 'Diamante Internacional Co.',
            'rfc' => 'DIAM1802139A1',
            'cosolicitante' => 'Sofía Rodríguez',
            'cosolicitante_rfc' => 'SRO1802139A1',
            'persona_autorizada' => 'Sofía Rodríguez',
            'calle_fiscal' => 'Calle 15',
            'numero_fiscal' => '15',
            'colonia_fiscal' => 'Colonia 15',
            'ciudad_fiscal' => 'Ciudad 15',
            'estado_fiscal' => 'Estado 15',
            'cp_fiscal' => '54327',
            'telefono_fiscal' => '55 7890 1234',
            'calle_envios' => 'Calle 16',
            'numero_envios' => '16',
            'colonia_envios' => 'Colonia 16',
            'ciudad_envios' => 'Ciudad 16',
            'estado_envios' => 'Estado 16',
            'cp_envios' => '67896',
            'telefono_envios' => '55 7890 1234',
            'banco' => 'Inbursa',
            'cuenta' => '2233445567',
            'sucursal' => '4321',
            'titular_cuenta' => 'Sofía Rodríguez',
            'beneficiario1' => 'Martín Rodríguez',
            'beneficiario1_parentesco' => 'Esposo',
            'beneficiario2' => 'Patricia Rodríguez',
            'beneficiario2_parentesco' => 'Hermana',
            'inscripcion' => 'diamante_int_inscripcion.jpg',
            'credencial_elector' => 'diamante_int_credencial_elector.jpg',
            'comprobante_domicilio' => 'diamante_int_comprobante_domicilio.jpg',
        ];
        $data['distribuidor2'] = [
            'avatar' => 'demo3/media/avatars/300-7.jpg',
            'phone' => '55 9054 2387',
            'tipo_persona' => 'FISICA',
            'company' => 'AP Distribuidor',
            'rfc' => 'APO1802139A2',
            'cosolicitante' => 'Juan Rodríguez Pérez',
            'cosolicitante_rfc' => 'ROPO1802132A1',
            'persona_autorizada' => 'Elena Pérez Rodríguez',
            'calle_fiscal' => 'Calle 2',
            'numero_fiscal' => '2',
            'colonia_fiscal' => 'Colonia 2',
            'ciudad_fiscal' => 'Ciudad 2',
            'estado_fiscal' => 'Estado 3',
            'cp_fiscal' => '12345',
            'telefono_fiscal' => '55 3457 2342',
            'calle_envios' => 'Calle 3',
            'numero_envios' => '3',
            'colonia_envios' => 'Colonia 3',
            'ciudad_envios' => 'Ciudad 3',
            'estado_envios' => 'Estado 3',
            'cp_envios' => '54321',
            'telefono_envios' => '55 6784 2345',
            'banco' => 'Banamex',
            'cuenta' => '2456543675',
            'sucursal' => '1234',
            'titular_cuenta' => 'Luis Diaz González',
            'beneficiario1' => 'Elena Pérez Rodríguez',
            'beneficiario1_parentesco' => 'Hija',
            'beneficiario2' => '',
            'beneficiario2_parentesco' => '',
            'inscripcion' => 'distribuidor_inscripcion.jpg',
            'credencial_elector' => 'distribuidor_credencial_elector.jpg',
            'comprobante_domicilio' => 'distribuidor_comprobante_domicilio.jpg',
        ];
        return $data;
    }
}
