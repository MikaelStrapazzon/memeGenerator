<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <script type="text/javascript" src="{{ asset('library/p5/p5.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div
        id="app"
        class="
            h-100 w-100
            min-vh-100
            d-flex align-items-stretch flex-column overflow-hidden"
    >
        <x-headers.header-default />

        <main class="h-100 w-100 min-wf-300 p-3 d-flex flex-grow-1">
            {{ $slot }}
        </main>

        <x-footers.footer-default />
    </div>
</body>
</html>
