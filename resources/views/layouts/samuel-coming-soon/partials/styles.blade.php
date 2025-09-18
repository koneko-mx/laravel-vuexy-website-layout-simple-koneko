<!-- Vendor Styles -->
@vite('vendor/koneko/laravel-koneko-layout-small-templates/resources/assets/notus/vendor/fonts/fontawesome.scss')
@yield('vendor-style')

@vite('vendor/koneko/laravel-koneko-layout-small-templates/resources/assets/css/samuel-coming-soon/app.css')
@if(($_chat['provider'] ?? 'none') === 'whatsapp')
    @vite('vendor/koneko/laravel-koneko-website-admin/resources/css/kna-chat.css')
@endif

<!-- Vendor Styles -->
@yield('vendor-style')

@if(($_chat['provider'] ?? 'none') === 'whatsapp')
    @vite('vendor/koneko/laravel-koneko-website-admin/resources/css/kna-chat.css')
@endif

@auth
    @vite('vendor/koneko/laravel-koneko-website-admin/resources/css/kna-admin.css')
@endauth
