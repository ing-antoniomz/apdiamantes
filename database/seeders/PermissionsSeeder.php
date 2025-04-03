<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    private array $data;

    public function __construct()
    {
        $this->data = $this->data();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        $data = $this->data;
        foreach ($data as $value) {
            Permission::create([
                'name' => $value['name'],
                'descripcion' => $value['descripcion'],
            ]);
        }
    }

    private function data()
    {
        return[
            0 => [
                'name'        => 'menu_admin',
                'descripcion' => 'Permite visualizar el menu de Administrador',
            ],
            1 => [
                'name'        => 'menu_cuenta',
                'descripcion' => 'Permite visualizar el menu de Cuenta',
            ],
            2 => [
                'name'        => 'menu_sistema',
                'descripcion' => 'Permite visualizar el menu de Sistema',
            ],
            3 => [
                'name'        => 'submenu_usuarios',
                'descripcion' => 'Permite ver el submenu de usuarios',
            ],
            4 => [
                'name'        => 'submenu_resumen',
                'descripcion' => 'Permite ver el submenu de resumen de cuenta',
            ],
            5 => [
                'name'        => 'submenu_ajustes',
                'descripcion' => 'Permite ver el submenu de ajustes de ceunta',
            ],
            6 => [
                'name'        => 'submenu_log_auditoria',
                'descripcion' => 'Permite ver el submenu de logs de auditoria',
            ],
            7 => [
                'name'        => 'submenu_log_sistema',
                'descripcion' => 'Permite ver el submenu de logs de sistema',
            ],
            8 => [
                'name'        => 'menu_documentacion',
                'descripcion' => 'Permite ver el menu de documentacion',
            ],
            9 => [
                'name'        => 'submenu_correo',
                'descripcion' => 'Permite ver el submenu de correos',
            ],
            10 => [
                'name'        => 'submenu_catalogos',
                'descripcion' => 'Permite ver el submenu de catalogos',
            ],
            11 => [
                'name'        => 'submenu_anuncios',
                'descripcion' => 'Permite ver el submenu de anuncios',
            ],
            12 => [
                'name'        => 'menu_grupo',
                'descripcion' => 'Permite ver el menu de grupo',
            ],
            13 => [
                'name'        => 'submenu_companeros',
                'descripcion' => 'Permite ver el submenu de companeros',
            ],
            14 => [
                'name'        => 'submenu_admin_grupos',
                'descripcion' => 'Permite ver el submenu de administracion de grupos',
            ],
            15 => [
                'name'        => 'submenu_invitar',
                'descripcion' => 'Permite ver el submenu de invitar usuarios',
            ],
            16 => [
                'name'        => 'menu_blog',
                'descripcion' => 'Permite ver el menu del blog',
            ],
            17 => [
                'name'        => 'submenu_blog',
                'descripcion' => 'Permite ver el submenu de blog',
            ],
            18 => [
                'name'        => 'menu_faq',
                'descripcion' => 'Permite ver el menu de preguntas frecuentes',
            ],
            19 => [
                'name'        => 'submenu_faq',
                'descripcion' => 'Permite ver el submenu de preguntas frecuentes',
            ],
        ];
    }
}
