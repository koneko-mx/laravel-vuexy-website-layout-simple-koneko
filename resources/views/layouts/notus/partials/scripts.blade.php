<!-- Vendor -->
@vite('vendor/koneko/laravel-koneko-layout-small-templates/resources/assets/templates/notus-tailwind/vendor/popper/popper.js')
@yield('vendor-script')

<!-- Page Script -->
@stack('page-script')

@vite('vendor/koneko/laravel-koneko-layout-small-templates/resources/assets/js/notus/app.js')
