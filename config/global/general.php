<?php
return array(
    // Product
    'product' => array(
        'name'        => 'APDiamantes',
        'description' => 'Generando riqueza para nuestras familias. Compra y venta de productos para tu salud.',
        'preview'     => 'https://apdiamantes.com',
        'home'        => 'https://apdiamantes.com',
        'purchase'    => 'https://apdiamantes.com',
        'licenses'    => array(
            'terms' => 'https://apdiamantes.com',
            'types' => array(
                array(
                    'title'       => 'Regular License',
                    'description' => 'For single end product used by you or one client',
                    'tooltip'     => 'Use, by you or one client in a single end product which end users are not charged for',
                    'price'       => '39',
                ),
                array(
                    'title'       => 'Extended License',
                    'description' => 'For single SaaS app with paying users',
                    'tooltip'     => 'Use, by you or one client, in a single end product which end users can be charged for.',
                    'price'       => '939',
                ),
            ),
        ),
        'demos'       => array(
            'demo3' => array(
                'title'       => 'Demo 3',
                'description' => 'New Trend',
                'published'   => true,
                'thumbnail'   => 'demos/demo3.png',
            ),
        ),
    ),

    // Meta
    'meta'    => array(
        'title'       => 'APDiamantes',
        'description' => 'Generando riqueza para nuestras familias. Compra y venta de productos para tu salud.',
        'keywords'    => 'apdiamantes,productos,belleza,salud,familia,franquicia,emprendimiento,ganancia,negocio,referidos,andra',
        'canonical'   => 'https://apdiamantes.com',
    ),

    // General
    'general' => array(
        'website'             => 'https://apdiamantes.com',
        'about'               => 'https://apdiamantes-local.com/nosotros',
        'contact'             => 'mailto:apdiamantes@outlook.com',
        'support'             => 'https://apdiamantes.com',
        'bootstrap-docs-link' => 'https://apdiamantes.com',
        'licenses'            => 'https://apdiamantes.com',
        'social-accounts'     => array(
            array(
                'name' => 'Youtube', 'url' => 'https://apdiamantes.com', 'logo' => 'svg/social-logos/youtube.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Github', 'url' => 'https://apdiamantes.com', 'logo' => 'svg/social-logos/github.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Twitter', 'url' => 'https://apdiamantes.com', 'logo' => 'svg/social-logos/twitter.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Instagram', 'url' => 'https://apdiamantes.com', 'logo' => 'svg/social-logos/instagram.svg', "class" => "h-20px",
            ),

            array(
                'name' => 'Facebook', 'url' => 'https://apdiamantes.com', 'logo' => 'svg/social-logos/facebook.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Dribbble', 'url' => 'https://apdiamantes.com', 'logo' => 'svg/social-logos/dribbble.svg', "class" => "h-20px",
            ),
        ),
    ),

    // Layout
    'layout'  => array(
        // Docs
        'docs'          => array(
            'logo-path'  => array(
                'default' => 'logos/logo-1.svg',
                'dark'    => 'logos/logo-1-dark.svg',
            ),
            'logo-class' => 'h-25px',
        ),

        // Illustration
        'illustrations' => array(
            'set' => 'sketchy-1',
        ),

        // Engage
        'engage'        => array(
            'demos'    => array(
                'enabled'   => false,
                'direction' => 'end',
            ),
            'explore'  => array(
                'enabled'   => false,
                'direction' => 'end',
            ),
            'help'     => array(
                'enabled'   => true,
                'direction' => 'end',
            ),
            'purchase' => array(
                'enabled' => false,
            ),
        ),
    ),

    // Vendors
    'vendors' => array(
        "datatables"             => array(
            "css" => array(
                "plugins/custom/datatables/datatables.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/datatables/datatables.bundle.js",
            ),
        ),
        "formrepeater"           => array(
            "js" => array(
                "plugins/custom/formrepeater/formrepeater.bundle.js",
            ),
        ),
        "fullcalendar"           => array(
            "css" => array(
                "plugins/custom/fullcalendar/fullcalendar.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/fullcalendar/fullcalendar.bundle.js",
            ),
        ),
        "flotcharts"             => array(
            "js" => array(
                "plugins/custom/flotcharts/flotcharts.bundle.js",
            ),
        ),
        "google-jsapi"           => array(
            "js" => array(
                "//www.google.com/jsapi",
            ),
        ),
        "tinymce"                => array(
            "js" => array(
                "plugins/custom/tinymce/tinymce.bundle.js",
            ),
        ),
        "ckeditor-classic"       => array(
            "js" => array(
                "plugins/custom/ckeditor/ckeditor-classic.bundle.js",
            ),
        ),
        "ckeditor-inline"        => array(
            "js" => array(
                "plugins/custom/ckeditor/ckeditor-inline.bundle.js",
            ),
        ),
        "ckeditor-balloon"       => array(
            "js" => array(
                "plugins/custom/ckeditor/ckeditor-balloon.bundle.js",
            ),
        ),
        "ckeditor-balloon-block" => array(
            "js" => array(
                "plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js",
            ),
        ),
        "ckeditor-document"      => array(
            "js" => array(
                "plugins/custom/ckeditor/ckeditor-document.bundle.js",
            ),
        ),
        "draggable"              => array(
            "js" => array(
                "plugins/custom/draggable/draggable.bundle.js",
            ),
        ),
        "fslightbox"             => array(
            "js" => array(
                "plugins/custom/fslightbox/fslightbox.bundle.js",
            ),
        ),
        "jkanban"                => array(
            "css" => array(
                "plugins/custom/jkanban/jkanban.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/jkanban/jkanban.bundle.js",
            ),
        ),
        "typedjs"                => array(
            "js" => array(
                "plugins/custom/typedjs/typedjs.bundle.js",
            ),
        ),
        "cookiealert"            => array(
            "css" => array(
                "plugins/custom/cookiealert/cookiealert.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/cookiealert/cookiealert.bundle.js",
            ),
        ),
        "cropper"                => array(
            "css" => array(
                "plugins/custom/cropper/cropper.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/cropper/cropper.bundle.js",
            ),
        ),
        "vis-timeline"           => array(
            "css" => array(
                "plugins/custom/vis-timeline/vis-timeline.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/vis-timeline/vis-timeline.bundle.js",
            ),
        ),
        "jstree"                 => array(
            "css" => array(
                "plugins/custom/jstree/jstree.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/jstree/jstree.bundle.js",
            ),
        ),
        "prismjs"                => array(
            "css" => array(
                "plugins/custom/prismjs/prismjs.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/prismjs/prismjs.bundle.js",
            ),
        ),
        "leaflet"                => array(
            "css" => array(
                "plugins/custom/leaflet/leaflet.bundle.css",
            ),
            "js"  => array(
                "plugins/custom/leaflet/leaflet.bundle.js",
            ),
        ),
        "amcharts"               => array(
            "js" => array(
                "https://cdn.amcharts.com/lib/5/index.js",
                "https://cdn.amcharts.com/lib/5/xy.js",
                "https://cdn.amcharts.com/lib/5/percent.js",
                "https://cdn.amcharts.com/lib/5/radar.js",
                "https://cdn.amcharts.com/lib/5/themes/Animated.js",
            ),
        ),
        "amcharts-maps"          => array(
            "js" => array(
                "https://cdn.amcharts.com/lib/5/index.js",
                "https://cdn.amcharts.com/lib/5/map.js",
                "https://cdn.amcharts.com/lib/5/geodata/worldLow.js",
                "https://cdn.amcharts.com/lib/5/geodata/continentsLow.js",
                "https://cdn.amcharts.com/lib/5/geodata/usaLow.js",
                "https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js",
                "https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js",
                "https://cdn.amcharts.com/lib/5/themes/Animated.js",
            ),
        ),
        "amcharts-stock"         => array(
            "js" => array(
                "https://cdn.amcharts.com/lib/5/index.js",
                "https://cdn.amcharts.com/lib/5/xy.js",
                "https://cdn.amcharts.com/lib/5/themes/Animated.js",
            ),
        ),
        'bootstrap-select'       => array(
            'css' => array(
                'plugins/custom/bootstrap-select/bootstrap-select.bundle.css',
            ),
            'js'  => array(
                'plugins/custom/bootstrap-select/bootstrap-select.bundle.js',
            ),
        ),
    ),

);
