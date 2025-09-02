<?php

declare(strict_types=1);

// Este archivo **NO se registra como config**, es usado por VuexyMenuRegistry

return [
    'id'        => 'vuexy-website-layout-simple-koneko',
    'name'      => 'Simple Koneko',
    'vendor'    => 'koneko',
    'version'   => '1.0.0',
    'homepage'  => 'https://koneko.mx',
    'tags'      => ['koneko', 'simple'],

    // Templates del paquete
    'templates' => [
        'anonymous' => [
            'name' => 'Anonymous',
            'tags' => ['koneko', 'anonymous'],
            'meta' => [
                'thumbnail' => 'vendor/koneko/layout-simple-koneko/assets/images/anonymous.png',
                'preview_url' => 'https://demo.vuexy-website-layout-simple-koneko.com',
            ]
        ],
        'landwind' => [
            'name' => 'Landwind',
            'tags' => ['koneko', 'landwind'],
            'meta' => [
                'thumbnail' => 'vendor/koneko/layout-simple-koneko/assets/images/landwind.png',
                'preview_url' => 'https://demo.vuexy-website-layout-simple-koneko.com',
            ]
        ],
        'limaa-m' => [
            'name' => 'Limaa-M',
            'tags' => ['koneko', 'limaa-m'],
            'meta' => [
                'thumbnail' => 'vendor/koneko/layout-simple-koneko/assets/images/limaa-m.png',
                'preview_url' => 'https://demo.vuexy-website-layout-simple-koneko.com',
            ]
        ],
        'maximus' => [
            'name' => 'Maximus',
            'tags' => ['koneko', 'maximus'],
            'meta' => [
                'thumbnail' => 'vendor/koneko/layout-simple-koneko/assets/images/maximus.png',
                'preview_url' => 'https://demo.vuexy-website-layout-simple-koneko.com',
            ]
        ],
        'notus' => [
            'name' => 'Notus',
            'tags' => ['koneko', 'notus'],
            'meta' => [
                'thumbnail' => 'vendor/koneko/layout-simple-koneko/assets/images/notus.png',
                'preview_url' => 'https://demo.vuexy-website-layout-simple-koneko.com',
            ]
        ],
        'samuel-coming-soon' => [
            'name' => 'Samuel Coming-Soon',
            'tags' => ['koneko', 'samuel-coming-soon'],
            'meta' => [
                'thumbnail' => 'vendor/koneko/layout-simple-koneko/assets/images/samuel-coming-soon.png',
                'preview_url' => 'https://demo.vuexy-website-layout-simple-koneko.com',
            ]
        ],
    ],
];
