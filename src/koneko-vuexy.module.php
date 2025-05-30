<?php

declare(strict_types=1);

return [
    // 🌐 Identidad del Módulo
    'name' => 'Template Simple Koneko',
    'description' => 'Plantilla Simple Koneko para el modulo vuexy-website-admin, banners, widgets y CSS personalizado.',
    'type' => 'plugin',
    'tags' => ['koneko-official', 'plantilla', 'banners', 'simple', 'css', 'template', 'vuexy-website-admin', 'website'],

    // ⚙️ Namespace de configuraciones Koneko Vuexy Admin
    'componentNamespace' => 'website-layout-simple-koneko',

    // 🧠 Metadatos visuales para UI del gestor
    'ui' => [
        'image'  => 'resources/img/module-cover.png',
        'readme' => 'README.md',
    ],

    // 📁 Recursos cargables: vistas, traducciones, migraciones
    'views' => [
        'anonymous' => 'resources/views/templates/anonymous',
        'landwind'  => 'resources/views/templates/landwind',
        'limaa-m'   => 'resources/views/templates/limaa-m',
        'maximus'   => 'resources/views/templates/maximus',
        'notus'     => 'resources/views/templates/notus',
        'samuel-coming-soon' => 'resources/views/templates/samuel-coming-soon',
        'vuexy-website-layout-simple-koneko' => 'resources/views/',
    ],

    // 🧩 Componentes Blade y Livewire
    'bladeComponents' => [
        'anonymous' => 'resources/views/templates/anonymous/components',
        'landwind'  => 'resources/views/templates/landwind/components',
        'limaa-m'   => 'resources/views/templates/limaa-m/components',
        'maximus'   => 'resources/views/templates/maximus/components',
        'notus'     => 'resources/views/templates/notus/components',
        'samuel-coming-soon' => 'resources/views/templates/samuel-coming-soon/components',
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
    ],
];
