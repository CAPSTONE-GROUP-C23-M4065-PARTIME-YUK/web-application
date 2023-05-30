<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('images/emblem.png') }}" rel="icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @yield('link')
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen flex-col bg-primary">
        @include('layouts.navigation')
        @yield('main')
        @include('layouts.footer')
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    @yield('script')
</body>

</html>
