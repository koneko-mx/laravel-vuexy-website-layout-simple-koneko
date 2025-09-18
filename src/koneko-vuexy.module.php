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
        'koneko-layout-small-templates' => 'resources/views/',
    ],

    // 📁 Publicar archivos
    'publishedFiles' => [
        'assets' => [
            'resources/public' => public_path('vendor/koneko/layout-sm-tpl/'),
        ],
    ],
];
