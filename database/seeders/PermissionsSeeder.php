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
    return [

        // Menú Administrador
        [
            'name'        => 'menu_admin',
            'descripcion' => 'Permite visualizar los menus de Administrador',
        ],

        // Menú Administrador Usuarios
        [
            'name'        => 'menu_admin_usuarios',
            'descripcion' => 'Permite ver el panel de administracion de usuarios',
        ],
        [
            'name'        => 'submenu_admin_usuarios',
            'descripcion' => 'Permite ver el submenu de administracion de usuarios',
        ],
        [
            'name'        => 'submenu_admin_grupos',
            'descripcion' => 'Permite ver el submenu de administracion de grupos',
        ],
        [
            'name'        => 'submenu_admin_niveles',
            'descripcion' => 'Permite ver el submenu de administracion de niveles',
        ],
        [
            'name'        => 'submenu_admin_bonos',
            'descripcion' => 'Permite ver el submenu de administracion de bonos',
        ],
        [
            'name'        => 'submenu_admin_descuentos',
            'descripcion' => 'Permite ver el submenu de administracion de descuentos',
        ],

        // Menú Administrador Catalogos
        [
            'name'        => 'menu_admin_catalogos',
            'descripcion' => 'Permite ver el panel de administracion de los distintos catalogos del sistema',
        ],
        [
            'name'        => 'submenu_admin_anuncios',
            'descripcion' => 'Permite ver el submenu de administracion de anuncios',
        ],
        [
            'name'        => 'submenu_admin_blog',
            'descripcion' => 'Permite ver el submenu de administracion de blog',
        ],
        [
            'name'        => 'submenu_admin_catalogos',
            'descripcion' => 'Permite ver el submenu de administracion de catalogos',
        ],
        [
            'name'        => 'submenu_admin_faq',
            'descripcion' => 'Permite ver el submenu de administracion de preguntas frecuentes',
        ],

        // Menú Sistema
        [
            'name'        => 'menu_admin_sistema',
            'descripcion' => 'Permite visualizar el menu de Sistema',
        ],
        [
            'name'        => 'submenu_admin_correo',
            'descripcion' => 'Permite ver el submenu de administracion de correos',
        ],
        [
            'name'        => 'submenu_admin_log_auditoria',
            'descripcion' => 'Permite ver el submenu de administracion logs de auditoria',
        ],
        [
            'name'        => 'submenu_admin_log_sistema',
            'descripcion' => 'Permite ver el submenu de administracion de logs de sistema',
        ],

        // Menú Cuenta
        [
            'name'        => 'menu_cuenta',
            'descripcion' => 'Permite visualizar el menu de Cuenta',
        ],
        [
            'name'        => 'submenu_resumen',
            'descripcion' => 'Permite ver el submenu de resumen de cuenta',
        ],
        [
            'name'        => 'submenu_ajustes',
            'descripcion' => 'Permite ver el submenu de ajustes de cuenta',
        ],

        // Menú Grupo
        [
            'name'        => 'menu_grupo',
            'descripcion' => 'Permite ver el menu de grupo',
        ],
        [
            'name'        => 'submenu_companeros',
            'descripcion' => 'Permite ver el submenu de companeros',
        ],

        [
            'name'        => 'submenu_invitar',
            'descripcion' => 'Permite ver el submenu de invitar usuarios',
        ],

        // Menú Blog
        [
            'name'        => 'menu_blog',
            'descripcion' => 'Permite ver el menu del blog',
        ],

        // Menú FAQ
        [
            'name'        => 'menu_faq',
            'descripcion' => 'Permite ver el menu de preguntas frecuentes',
        ],

        //admin listado de usuarios
        [
            'name'        => 'admin_users_list',
            'descripcion' => 'Permite ver el listado de usuarios',
        ],
        [
            'name'        => 'admin_users_create',
            'descripcion' => 'Permite crear usuarios',
        ],
        [
            'name'        => 'admin_users_update',
            'descripcion' => 'Permite actualizar usuarios',
        ],
        [
            'name'        => 'admin_users_activate',
            'descripcion' => 'Permite activar usuarios',
        ],
    ];
}
}
