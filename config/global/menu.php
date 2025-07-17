<?php

return array(
    // Documentation menu
    'documentation' => array(
        // Getting Started
        array(
            'heading' => 'Getting Started',
        ),

        // Overview
        array(
            'title' => 'Overview',
            'path'  => 'documentation/getting-started/overview',
            // 'role' => ['admin'],
            // 'permission' => [],
        ),

        // Build
        array(
            'title' => 'Build',
            'path'  => 'documentation/getting-started/build',
        ),

        array(
            'title'      => 'Multi-demo',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes'    => array('item' => 'menu-accordion'),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => 'documentation/getting-started/multi-demo/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Build',
                        'path'   => 'documentation/getting-started/multi-demo/build',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // File Structure
        array(
            'title' => 'File Structure',
            'path'  => 'documentation/getting-started/file-structure',
        ),

        // Customization
        array(
            'title'      => 'Customization',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes'    => array('item' => 'menu-accordion'),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'SASS',
                        'path'   => 'documentation/getting-started/customization/sass',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Javascript',
                        'path'   => 'documentation/getting-started/customization/javascript',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Dark skin
        array(
            'title' => 'Dark Mode Version',
            'path'  => 'documentation/getting-started/dark-mode',
        ),

        // RTL
        array(
            'title' => 'RTL Version',
            'path'  => 'documentation/getting-started/rtl',
        ),

        // Troubleshoot
        array(
            'title' => 'Troubleshoot',
            'path'  => 'documentation/getting-started/troubleshoot',
        ),

        // Changelog
        array(
            'title'            => 'Changelog <span class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v'.theme()->getVersion().'</span>',
            'breadcrumb-title' => 'Changelog',
            'path'             => 'documentation/getting-started/changelog',
        ),

        // References
        array(
            'title' => 'References',
            'path'  => 'documentation/getting-started/references',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // Configuration
        array(
            'heading' => 'Configuration',
        ),

        // General
        array(
            'title' => 'General',
            'path'  => 'documentation/configuration/general',
        ),

        // Menu
        array(
            'title' => 'Menu',
            'path'  => 'documentation/configuration/menu',
        ),

        // Page
        array(
            'title' => 'Page',
            'path'  => 'documentation/configuration/page',
        ),

        // Page
        array(
            'title' => 'Add NPM Plugin',
            'path'  => 'documentation/configuration/npm-plugins',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // General
        array(
            'heading' => 'General',
        ),

        // DataTables
        array(
            'title'      => 'DataTables',
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => 'documentation/general/datatables/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Remove demos
        array(
            'title' => 'Remove Demos',
            'path'  => 'documentation/general/remove-demos',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // HTML Theme
        array(
            'heading' => 'HTML Theme',
        ),

        array(
            'title' => 'Components',
            'path'  => '//preview.keenthemes.com/metronic8/demo3/documentation/base/utilities.html',
        ),

        array(
            'title' => 'Documentation',
            'path'  => '//preview.keenthemes.com/metronic8/demo3/documentation/getting-started.html',
        ),
    ),

    // Main menu
    'main'          => array(
        // Dashboard
        array(
            'title' => 'Dashboard',
            'path'  => '',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo3/media/icons/duotune/art/art002.svg", "svg-icon-1 text-light"),
                'font' => '',
            ),
        ),

        // Separador Administración
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'content' =>
                '<span class="menu-section text-muted text-uppercase fs-8 ls-1">ADMINISTRACIÓN</span>',
            'permission' => ['menu_admin_sistema'],
        ),

        // Administracion Catalogos
        array(
            'title'      => 'Catalogos',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo3/media/icons/duotune/general/gen025.svg", "svg-icon-1 text-light"),
                'font' => '',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => ['menu_admin_catalogos'],
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Anuncios',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_anuncios'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'  => 'Blog',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_blog'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'      => 'Catalogos',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_catalogos'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),

                    array(
                        'title'  => 'FAQ',
                        'path'   => '#',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_faq'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                ),
            ),
        ),

        // Admnistracion System
        array(
            'title'      => 'Sistema',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo3/media/icons/duotune/technology/teh001.svg", "svg-icon-1 text-light"),
                'font' => '',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => ['menu_admin_sistema'],
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'E-mail',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_correo'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'  => 'Log de Auditoria',
                        'path'   => 'admin/log/auditoria',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_log_auditoria'],
                    ),
                    array(
                        'title'  => 'Log de Sistema',
                        'path'   => 'admin/log/sistema',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_log_sistema'],
                    ),

                ),
            ),
        ),

        // Administración Usuarios
        array(
            'title'      => 'Usuarios',
            'icon'       => array(
                'svg'  => '<div class="overflow-hidden">' . theme()->getSvgIcon("demo3/media/icons/duotune/communication/com014.svg", "svg-icon-1 text-light") . '</div>',
                'font' => '',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => ['menu_admin_usuarios'],
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Bonos',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_bonos'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'      => 'Descuentos',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_descuentos'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'      => 'Grupos',
                        'path'       => 'admin/grupos',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_grupos'],
                    ),
                    array(
                        'title'      => 'Niveles',
                        'path'       => 'admin/niveles',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_niveles'],
                    ),
                    array(
                        'title'      => 'Usuarios',
                        'path'       => 'admin/users',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_usuarios'],
                    ),
                ),
            ),
        ),

        // Separador Menu
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'content' =>
            '<span class="menu-section text-muted text-uppercase fs-8 ls-1">
                MENÚ
            </span>',
        ),

        // Cuenta
        array(
            'title'      => 'Cuenta',
            'icon'       => array(
                'svg'  => '<div class="overflow-hidden">' . theme()->getSvgIcon("demo3/media/icons/duotune/communication/com013.svg", "svg-icon-1 text-light") . '</div>',
                'font' => '',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => ['menu_cuenta'],
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => 'Ajustes',
                        'path'   => 'cuenta/ajustes',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_ajustes'],
                    ),
                    array(
                        'title'  => 'Resumen',
                        'path'   => 'cuenta/resumen',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_resumen'],
                    ),
                ),
            ),
        ),

        // Group
        array(
            'title'      => 'Grupo',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo3/media/icons/duotune/abstract/abs025.svg", "svg-icon-1 text-light"),
                'font' => '',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => ['menu_grupo'],
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => 'Compañeros',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_companeros'],
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Proximamnete",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'  => 'Invitar',
                        'path'       => 'grupo/invitar',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_invitar'],
                    ),
                ),
            ),
        ),

        //Blog
        array(
            'title'  => 'Blog',
            'path'       => 'blog',
            'permission' => ['menu_blog'],
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo3/media/icons/duotune/communication/com007.svg", "svg-icon-1 text-light"),
                'font' => '',
            ),
            /* 'sub'        => array(
                'class' => '',
                'items' => array(
                    array(
                        'title'  => 'Prueba',
                        'path'   => 'blog/prueba',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['menu_blog'],
                    ),
                ),
            ), */
        ),

        // Separador Ayuda
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">Ayuda</span>',
        ),

        // FAQ
        array(
            'title' => 'FAQ',
            'icon'  => theme()->getSvgIcon("demo3/media/icons/duotune/general/gen046.svg", "svg-icon-1 text-light"),
            'permission' => ['menu_faq'],
            'path'  => 'faq',
        ),
    ),
);
