<!DOCTYPE html>
<html lang="{{ $_seo['locale'] ?? app()->getLocale() }}"
    data-base-url="{{ url('/') . '/' }}"
    data-template="{{ $_layout['template'] }}"
    prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('vuexy-website-admin::layouts.base.header')

    @include('vuexy-website-layout-simple-koneko::layouts.limaa-m.partials.styles')
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')

    @include('vuexy-website-layout-simple-koneko::layouts.limaa-m.partials.scripts')
</body>
</html>
