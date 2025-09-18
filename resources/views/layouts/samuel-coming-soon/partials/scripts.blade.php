<!-- Vendor -->
@yield('vendor-script')

@if($_chat["provider"] !== 'none' ?? false)
    <x-koneko-website-admin::chat.float offsetY="64px" offsetYSm="20px" />
@endif
