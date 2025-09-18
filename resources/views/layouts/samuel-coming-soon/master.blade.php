<!DOCTYPE html>
<html lang="{{ $_seo['locale'] ?? app()->getLocale() }}"
    data-base-url="{{ url('/') . '/' }}"
    data-template="{{ $_layout['template'] }}"
    prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('koneko-website-admin::layouts.base.header')

    @include('koneko-layout-small-templates::layouts.samuel-coming-soon.partials.styles')

    <!-- Page Styles -->
    @stack('page-style')
</head>
<body>
    @yield('content')

    @include('koneko-layout-small-templates::layouts.samuel-coming-soon.partials.scripts')

    @auth
        <x-koneko-website-admin::admin.shortcuts
            :site-id="$_layout['site_id'] ?? null"
            :page-id="$_layout['page_id'] ?? null"

            admin-url="/admin"
            page-edit-path="/admin/website-admin/sitios-web/:site/pages/:page/edit"
            site-edit-path="/admin/website-admin/sitios-web/:site/general"

            position="right"
            offset-x="18px"
            offset-y="150px"
            offset-x-sm="14px"
            offset-y-sm="90px"
            dock-align="fab-side"

            color="var(--primary, #c0781a)"

            :force="true"
            :pulse="true"
            :show-fab-desktop="true"
            :start-open-desktop="false"
            :start-open-mobile="false"
        />
    @endauth

    <!-- Page Script -->
    @stack('page-script')
</body>
</html>
