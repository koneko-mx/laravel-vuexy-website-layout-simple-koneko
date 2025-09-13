<!-- Vendor Styles -->
@vite([
    //'vendor/koneko/laravel-koneko-layout-small-templates/resources/assets/notus/vendor/fonts/fontawesome.scss'
])
@yield('vendor-style')

<!-- Page Styles -->
@stack('page-style')

@vite('vendor/koneko/laravel-koneko-layout-small-templates/resources/assets/css/notus/app.css')
