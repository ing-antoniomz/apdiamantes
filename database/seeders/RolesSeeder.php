<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    private array $permisos;
    private array $data;

    public function __construct()
    {
        $this->permisos = Permission::all()->pluck('name')->toArray();
        $this->data = $this->data();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->data;

        foreach ($data as $value) {
            $role = Role::create([
                'name' => $value['name'],
                'descripcion' => $value['descripcion'],
                'volumen' => $value['volumen'],
                'imagen' => $value['imagen'],
            ]);
            // Filtrar los permisos que existen en $this->permisos
            $validPermissions = array_intersect($value['permisos'], $this->permisos);

            // Asignar los permisos válidos al rol
            if (!empty($validPermissions)) {
                $role->givePermissionTo($validPermissions);
            }
        }
    }

    private function data()
    {
        return [
            0 => [
                'name'        => 'Administrador',
                'descripcion' => 'El administrador de todo el sistema.',
                'volumen'        => '0',
                'imagen' => 'roles/role_admin.png',
                'permisos' => $this->permisos,
            ],
            1 => [
                'name'        => 'Distribuidor',
                'descripcion' => 'Eres distirbuidor de apdiamantes',
                'volumen'        => '5000',
                'imagen' => 'roles/role_distribuidor.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
            2 => [
                'name'        => 'Supervisor',
                'descripcion' => 'Un gran supervisor para nuestro equipo',
                'volumen'        => '10000',
                'imagen' => 'roles/role_supervisor.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
            3 => [
                'name'        => 'Gerente',
                'descripcion' => 'Con la gerencia adecuada cualquioer meta es posible',
                'volumen'        => '30000',
                'imagen' => 'roles/role_gerente.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
            4 => [
                'name'        => 'Director',
                'descripcion' => 'Ser Director es uan ghran responsabilidad',
                'volumen'        => '50000',
                'imagen' => 'roles/role_director.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
            5 => [
                'name'        => 'Oro',
                'descripcion' => 'Tus aportaciones brillan como el oro',
                'volumen'        => '100000',
                'imagen' => 'roles/role_oro.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
            6 => [
                'name'        => 'Platino',
                'descripcion' => 'El platino e stan escaso en el mundo como tus habilidades',
                'volumen'        => '300000',
                'imagen' => 'roles/role_platino.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
            7 => [
                'name'        => 'Diamante',
                'descripcion' => 'El diamante estan duro como tus logros',
                'volumen'        => '500000',
                'imagen' => 'roles/role_diamante.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
            8 => [
                'name'        => 'Diamante INT',
                'descripcion' => 'No hay nada mas valioso que un diamante internacional',
                'volumen'        => '1000000',
                'imagen' => 'roles/role_diamante_int.png',
                'permisos' => ['menu_cuenta', 'submenu_resumen', 'submenu_ajustes', 'menu_grupo', 'submenu_companeros', 'submenu_invitar', 'menu_blog', 'menu_faq'],
            ],
        ];
    }
}
