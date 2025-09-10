<!DOCTYPE html>
<html lang="{{ $_seo['locale'] ?? app()->getLocale() }}"
    data-base-url="{{ url('/') . '/' }}"
    data-template="{{ $_layout['template'] }}"
    prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('koneko-website-admin::layouts.base.header')

    @include('koneko-layout-small-templates::layouts.anonymous.partials.styles')
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')

    @include('koneko-layout-small-templates::layouts.anonymous.partials.scripts')
</body>
</html>
