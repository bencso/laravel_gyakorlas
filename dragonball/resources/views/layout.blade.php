<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=hachi-maru-pop:400|squada-one:400" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite('resources/css/app.css')
    <link rel="preload" href="{{ asset('favicon.ico') }}" as="image" />
    <link rel="preload" href="{{ asset('images/navbar-bg.jpg') }}" as="image" />
</head>

<body class="bg-stone-900 min-h-[100svh] h-full text-white">
    @component('components.navbar')
    @endcomponent
    <main class="p-8 h-full w-full min-h-[100%]">
        @yield('content')
    </main>
</body>

</html>
