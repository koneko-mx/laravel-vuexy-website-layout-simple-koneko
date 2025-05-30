<!DOCTYPE html>
<html lang="{{ session()->get('locale') ?? app()->getLocale() }}"
    data-base-url="{{ url('/') . '/' }}"
    data-template="{{ $_layout['template'] }}"
    prefix="og: http://ogp.me/ns#">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('vuexy-website-admin::layouts.base.header')
    @include('vuexy-website-layout-simple-koneko::layouts.maximus.partials.styles')
</head>
<body class="font-sans text-gray-800 bg-gradient-to-b from-sky-50 to-white">
    @yield('header')
    @yield('content')
    @yield('footer')
    @include('vuexy-website-layout-simple-koneko::layouts.maximus.partials.scripts')
</body>
</html>
