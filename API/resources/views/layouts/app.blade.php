<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans bg-gray-background text-gray-900 text-base">
        <div >
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dark bg-center bg-gray-100 dark:bg-gray-900 selection:bg-blue-500 selection:text-black"> --}}
            @include('auth.alert')
            @yield('content')

        </div>
    </body>
</html>
