<!DOCTYPE html>
<html lang="{{ session()->get('locale') ?? app()->getLocale() }}"
    data-base-url="{{ url('/') . '/' }}"
    data-template="{{ $_layout['template'] }}"
    prefix="og: http://ogp.me/ns#">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('vuexy-website-admin::layouts.base.header')
    @include('vuexy-website-layout-simple-koneko::layouts.samuel-coming-soon.partials.styles')
</head>
<body>
    @yield('content')
    @include('vuexy-website-layout-simple-koneko::layouts.samuel-coming-soon.partials.scripts')
</body>
</html>
