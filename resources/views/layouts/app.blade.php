<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('scripts')

    <!-- Styles -->
    <style type="text/css">
        .bottom {
            background: linear-gradient(rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 75%, rgba(161, 206, 248, 1) 100%);
            min-height: 100vh;
        }

        .full {
            background: linear-gradient(0deg, rgba(161, 206, 248, 1) 0%, rgba(255, 255, 255, 1) 25%, rgba(255, 255, 255, 1) 75%, rgba(161, 206, 248, 1) 100%);
            min-height: 100vh;
        }

        .bg-primary {
            background-color: #a1cef8 !important;
        }
    </style>
</head>

<body>
    <script>
        0
    </script>
    <div class={{ empty($full) ? '' : 'full' }}>
        <div id="app">
            @include('layouts.nav')

            <main>
                @yield('content')
            </main>

            @include('layouts.footer')
        </div>
    </div>
</body>

</html>