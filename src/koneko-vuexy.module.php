<?php

declare(strict_types=1);

return [
    // 🌐 Identidad del Módulo
    'name' => 'Koneko Layout Small Templates',
    'description' => 'Plantilla Simple Koneko para el modulo koneko-website-admin, banners, widgets y CSS personalizado.',
    'type' => 'plugin',
    'tags' => ['koneko-official', 'plantilla', 'banners', 'simple', 'css', 'template', 'koneko-website-admin', 'website'],

    // ⚙️ Namespace de configuraciones Koneko Vuexy Admin
    'componentNamespace' => 'layout-small-templates',

    // 🧠 Metadatos visuales para UI del gestor
    'ui' => [
        'image'  => 'resources/img/module-cover.png',
        'readme' => 'README.md',
    ],

    // ⚙️ Archivos de configuración del módulo
    'configs' => [
        'koneko.website-admin' => 'config/koneko.php',
    ],

    // 📁 Recursos cargables: vistas, traducciones, migraciones
    'views' => [
        'layout-small-templates-anonymous' => 'resources/views/templates/anonymous',
        'layout-small-templates-landwind'  => 'resources/views/templates/landwind',
        'layout-small-templates-limaa-m'   => 'resources/views/templates/limaa-m',
        'layout-small-templates-maximus'   => 'resources/views/templates/maximus',
        'layout-small-templates-notus'     => 'resources/views/templates/notus',
        'layout-small-templates-samuel-coming-soon' => 'resources/views/templates/samuel-coming-soon',

        'koneko-layout-small-templates' => 'resources/views/',
    ],

    // 📁 Publicar archivos
    'publishedFiles' => [
        'assets-anonymous' => [
            'resources/public/templates/anonymous' => public_path('vendor/koneko-layout/anonymous'),
            'resources/public/templates/landwind'  => public_path('vendor/koneko-layout/landwind'),
            'resources/public/templates/limaa-m'   => public_path('vendor/koneko-layout/limaa-m'),
            'resources/public/templates/maximus'   => public_path('vendor/koneko-layout/maximus'),
            'resources/public/templates/notus'     => public_path('vendor/koneko-layout/notus'),
            'resources/public/templates/samuel-coming-soon' => public_path('vendor/koneko-layout/samuel-coming-soon'),
        ],
        'assets-demo' => [
            'resources/public/img' => public_path('vendor/koneko-layout-small-templates/img'),
        ],
    ],
];
