<?php
return array(
    '' => array(
        'title'       => 'Dashboard',
        'description' => '',
        'view'        => 'index',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => false,
            ),
        ),
        'assets'      => array(
            'custom'  => array(
                'js' => array(
                    'js/widgets.bundle.js',
                ),
            ),
            'vendors' => array('fullcalendar', 'amcharts', 'amcharts-maps'),
        ),
    ),

    'admin' => array(
        'users'  => array(
            'title'  => 'Usuarios',
            'description' => '',
            'layout'      => array(
                'page-title' => array(
                    'description' => false,
                    'breadcrumb'  => true,
                ),
            ),
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        '../apdiamantes/js/admin/users.js',
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
        'grupos'  => array(
            'title'  => 'Grupos',
            'description' => '',
            'layout'      => array(
                'page-title' => array(
                    'description' => false,
                    'breadcrumb'  => true,
                ),
            ),
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
        'niveles'  => array(
            'title'  => 'Niveles',
            'description' => '',
            'layout'      => array(
                'page-title' => array(
                    'description' => false,
                    'breadcrumb'  => true,
                ),
            ),
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
        'log' => array(
            'auditoria'  => array(
                'title'  => 'Log de Auditoria',
                'assets' => array(
                    'custom' => array(
                        'css' => array(
                            'plugins/custom/datatables/datatables.bundle.css',
                        ),
                        'js'  => array(
                            'plugins/custom/datatables/datatables.bundle.js',
                        ),
                    ),
                ),
            ),
            'sistema' => array(
                'title'  => 'Log de Sistema',
                'assets' => array(
                    'custom' => array(
                        'css' => array(
                            'plugins/custom/datatables/datatables.bundle.css',
                        ),
                        'js'  => array(
                            'plugins/custom/datatables/datatables.bundle.js',
                        ),
                    ),
                ),
            ),
        ),
    ),

    'cuenta' => array(
        'resumen' => array(
            'title'  => 'Descripción General',
            'view'   => 'account/overview/overview',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                    ),
                ),
            ),
        ),

        'ajustes' => array(
            'title'  => 'Ajustes de Cuenta',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        //'js/custom/account/settings/profile-details.js',
                        'js/custom/account/settings/signin-methods.js',
                    ),
                ),
            ),
        ),
    ),
    'grupo' => array(
        'invitar' => array(
            'title'  => 'Invitar',
            'description' => 'Agregar usuarios a tu grupo',
            'layout'      => array(
                'page-title' => array(
                    'description' => true,
                    'breadcrumb'  => false,
                ),
            ),
            'view'   => 'group/invite/index',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                    ),
                ),
            ),
        ),
    ),
    'blog' => array(
        'title'  => 'Blog',
        'view'   => 'blog/index',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => false,
            ),
        ),
        'assets'      => array(
            'custom'  => array(
                'js' => array(
                    //'js/widgets.bundle.js',
                ),
            ),
            'vendors' => array('fslightbox'),
        ),
        /* 'prueba' => array(
            'title'  => 'Muestra Blog',
            'view'   => 'blog/prueba',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                    ),
                ),
                'vendors' => array('fslightbox'),
            ),

        ), */
    ),
    'faq' => array(
        'title'  => 'FAQ',
        'view'   => 'faq/index',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => false,
            ),
        ),
        'assets'      => array(
            'custom'  => array(
                'js' => array(
                    //'js/widgets.bundle.js',
                ),
            ),
            'vendors' => array('fslightbox'),
        ),
    ),


    'login'           => array(
        'title'  => 'Login',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-in/general.js',
                    '../apdiamantes/js/contacto/index.js',
                ),
            ),
            'vendors' => array(
                'leaflet',
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),
    'forgot-password' => array(
        'title'  => 'Forgot Password',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/password-reset/password-reset.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),
    'contacto' => array(
        'title'       => 'Contacto',
        'description' => '',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => false,
            ),
        ),
        'assets'      => array(
            'custom'  => array(
                'js' => array(
                    '../apdiamantes/js/contacto/index.js',
                ),
            ),
            'vendors' => array(
                'leaflet',
            ),
        ),
    ),
    'nosotros' => array(
        'title'       => 'Nosotros',
        'description' => '',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => false,
            ),
        ),
        'assets'      => array(
            'custom'  => array(
                'js' => array(

                ),
            ),
            'vendors' => array(),
        ),
    ),


    // Documentation pages
    'documentation' => array(
        '*' => array(
            'assets' => array(
                'vendors' => array('prismjs'),
                'custom'  => array(
                    'js' => array(
                        'js/custom/documentation/documentation.js',
                    ),
                ),
            ),

            'layout' => array(
                'base'    => 'docs', // Set base layout: default|docs

                // Content
                'content' => array(
                    'width'  => 'fixed', // Set fixed|fluid to change width type
                    'layout' => 'documentation'  // Set content type
                ),
            ),
        ),

        'getting-started' => array(
            'overview' => array(
                'title'       => 'Overview',
                'description' => '',
                'view'        => 'documentation/getting-started/overview',
            ),

            'build' => array(
                'title'       => 'Gulp',
                'description' => '',
                'view'        => 'documentation/getting-started/build/build',
            ),

            'multi-demo' => array(
                'overview' => array(
                    'title'       => 'Overview',
                    'description' => '',
                    'view'        => 'documentation/getting-started/multi-demo/overview',
                ),
                'build'    => array(
                    'title'       => 'Multi-demo Build',
                    'description' => '',
                    'view'        => 'documentation/getting-started/multi-demo/build',
                ),
            ),

            'file-structure' => array(
                'title'       => 'File Structure',
                'description' => '',
                'view'        => 'documentation/getting-started/file-structure',
            ),

            'customization' => array(
                'sass'       => array(
                    'title'       => 'SASS',
                    'description' => '',
                    'view'        => 'documentation/getting-started/customization/sass',
                ),
                'javascript' => array(
                    'title'       => 'Javascript',
                    'description' => '',
                    'view'        => 'documentation/getting-started/customization/javascript',
                ),
            ),

            'dark-mode' => array(
                'title' => 'Dark Mode Version',
                'view'  => 'documentation/getting-started/dark-mode',
            ),

            'rtl' => array(
                'title' => 'RTL Version',
                'view'  => 'documentation/getting-started/rtl',
            ),

            'troubleshoot' => array(
                'title' => 'Troubleshoot',
                'view'  => 'documentation/getting-started/troubleshoot',
            ),

            'changelog' => array(
                'title'       => 'Changelog',
                'description' => 'version and update info',
                'view'        => 'documentation/getting-started/changelog/changelog',
            ),

            'updates' => array(
                'title'       => 'Updates',
                'description' => 'components preview and usage',
                'view'        => 'documentation/getting-started/updates',
            ),

            'references' => array(
                'title'       => 'References',
                'description' => '',
                'view'        => 'documentation/getting-started/references',
            ),
        ),

        'general' => array(
            'datatables'   => array(
                'overview' => array(
                    'title'       => 'Overview',
                    'description' => 'plugin overview',
                    'view'        => 'documentation/general/datatables/overview/overview',
                ),
            ),
            'remove-demos' => array(
                'title'       => 'Remove Demos',
                'description' => 'How to remove unused demos',
                'view'        => 'documentation/general/remove-demos/index',
            ),
        ),

        'configuration' => array(
            'general'     => array(
                'title'       => 'General Configuration',
                'description' => '',
                'view'        => 'documentation/configuration/general',
            ),
            'menu'        => array(
                'title'       => 'Menu Configuration',
                'description' => '',
                'view'        => 'documentation/configuration/menu',
            ),
            'page'        => array(
                'title'       => 'Page Configuration',
                'description' => '',
                'view'        => 'documentation/configuration/page',
            ),
            'npm-plugins' => array(
                'title'       => 'Add NPM Plugin',
                'description' => 'Add new NPM plugins and integrate within webpack mix',
                'view'        => 'documentation/configuration/npm-plugins',
            ),
        ),
    ),
);
