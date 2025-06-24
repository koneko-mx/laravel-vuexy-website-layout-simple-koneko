<!DOCTYPE html>
<html lang="{{ $_seo['locale'] ?? app()->getLocale() }}"
    data-base-url="{{ url('/') . '/' }}"
    data-template="{{ $_layout['template'] }}"
    prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('vuexy-website-admin::layouts.base.header')

    @include('vuexy-website-layout-simple-koneko::layouts.maximus.partials.styles')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans text-gray-800 bg-gradient-to-b from-sky-50 to-white">
    @yield('header')
    @yield('content')
    @yield('footer')

    <!-- Back to top button -->
    <div x-data="{ showButton: false }" @scroll.window="showButton = window.pageYOffset > 500">
        <button
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            x-show="showButton"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-10"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-10"
            class="fixed bottom-8 right-8 bg-yellow-500 text-gray-900 w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-yellow-400 transition focus:outline-none"
        >
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    @include('vuexy-website-layout-simple-koneko::layouts.maximus.partials.scripts')
</body>
</html>
