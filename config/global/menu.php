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

        // Modules
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">Menú</span>',
        ),

        // Administracion
        array(
            'title'      => function () {
                return trans('Administration');
            },
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo3/media/icons/duotune/general/gen025.svg", "svg-icon-1 text-light"),
                'font' => '',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => ['menu_admin'],
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => function () {
                            return trans('Anouncements');
                        },
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_anuncios'],
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
                        'title'  => function () {
                            return trans('Blog');
                        },
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_blog'],
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
                        'title'      => function () {
                            return trans('Catalogs');
                        },
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_catalogos'],
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
                        'title'      => function () {
                            return trans('E-Mail');
                        },
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_correo'],
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
                        'title'      => function () {
                            return trans('Groups');
                        },
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_grupos'],
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
                        'title'      => function () {
                            return trans('Levels');
                        },
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_admin_grupos'],
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
                        'title'  => function () {
                            return trans('Users');
                        },
                        'path'   => 'admin/users',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_usuarios'],
                    ),
                    array(
                        'title'  => function () {
                            return trans('FAQ');
                        },
                        'path'   => '#',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_faq'],
                        'permission' => ['submenu_blog'],
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

        // System
        array(
            'title'      => function () {
                return trans('System');
            },
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo3/media/icons/duotune/technology/teh001.svg", "svg-icon-1 text-light"),
                'font' => '',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => ['menu_sistema'],
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => function () {
                            return trans('Audit Log');
                        },
                        'path'   => 'log/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_log_auditoria'],
                    ),
                    array(
                        'title'  => function () {
                            return trans('System Log');
                        },
                        'path'   => 'log/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_log_sistema'],
                    ),
                    /* array(
                        'title'  => 'Error 404',
                        'path'   => 'error/error-404',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Error 500',
                        'path'   => 'error/error-500',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ), */
                ),
            ),
        ),

        // Account
        array(
            'title'      => function () {
                return trans('Account');
            },
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
                        'title'  => function () {
                            return trans('Settings');
                        },
                        'path'   => 'account/settings',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_ajustes'],
                    ),
                    array(
                        'title'  => function () {
                            return trans('Overview');
                        },
                        'path'   => 'account/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_resumen'],
                    ),
                ),
            ),
        ),

        // Group
        array(
            'title'      => function () {
                return trans('Group');
            },
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
                        'title'  => function () {
                            return trans('Partners');
                        },
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
                        'title'  => function () {
                            return trans('Invite');
                        },
                        'path'       => 'grupo/invitar',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['submenu_invitar'],
                    ),
                ),
            ),
        ),

        //Blog
        array(
            'title'  => function () {
                return trans('Blog');
            },
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
                        'title'  => function () {
                            return trans('prueba');
                        },
                        'path'   => 'blog/prueba',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => ['menu_blog'],
                    ),
                ),
            ), */
        ),

        //// Help
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">Ayuda</span>',
            'permission' => ['menu_documentacion'],
        ),

        // Documentation
        /* array(
            'title' => 'Documentación',
            'icon'  => theme()->getSvgIcon("demo3/media/icons/duotune/abstract/abs027.svg", "svg-icon-1 text-light"),
            'path'  => 'documentation/getting-started/overview',
            'permission' => ['menu_documentacion'],
        ), */
        // FAQ
        array(
            'title' => function () {
                return trans('FAQ');
            },
            'icon'  => theme()->getSvgIcon("demo3/media/icons/duotune/general/gen046.svg", "svg-icon-1 text-light"),
            'permission' => ['menu_faq'],
            'path'  => 'faq',
        ),


        // Changelog
        /* array(
            'title' => 'Changelog v'.theme()->getVersion(),
            'icon'  => theme()->getSvgIcon("demo3/media/icons/duotune/coding/cod003.svg", "svg-icon-2"),
            'path'  => 'documentation/getting-started/changelog',
        ), */

    ),

    // Horizontal menu
    'horizontal'    => array(
        // Dashboard
        array(
            'title'   => 'Dashboard',
            'path'    => '',
            'classes' => array('item' => 'me-lg-1'),
        ),

        // Resources
        array(
            'title'      => 'Resources',
            'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            'attributes' => array(
                'data-kt-menu-trigger'   => "click",
                'data-kt-menu-placement' => "bottom-start",
            ),
            'sub'        => array(
                'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
                'items' => array(
                    // Documentation
                    array(
                        'title' => 'Documentation',
                        'icon'  => theme()->getSvgIcon("demo3/media/icons/duotune/abstract/abs027.svg", "svg-icon-2"),
                        'path'  => 'documentation/getting-started/overview',
                    ),

                    // Changelog
                    array(
                        'title' => 'Changelog v'.theme()->getVersion(),
                        'icon'  => theme()->getSvgIcon("demo3/media/icons/duotune/general/gen005.svg", "svg-icon-2"),
                        'path'  => 'documentation/getting-started/changelog',
                    ),
                ),
            ),
        ),

        // Account
        array(
            'title'      => 'Account',
            'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            'attributes' => array(
                'data-kt-menu-trigger'   => "click",
                'data-kt-menu-placement' => "bottom-start",
            ),
            'sub'        => array(
                'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => 'account/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Settings',
                        'path'   => 'account/settings',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Security',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Coming soon",
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

        // System
        array(
            'title'      => 'System',
            'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            'attributes' => array(
                'data-kt-menu-trigger'   => "click",
                'data-kt-menu-placement' => "bottom-start",
            ),
            'sub'        => array(
                'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
                'items' => array(
                    array(
                        'title'      => 'Settings',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Coming soon",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'  => 'Audit Log',
                        'path'   => 'log/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'System Log',
                        'path'   => 'log/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),
    ),
);
