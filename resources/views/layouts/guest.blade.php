<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://kit.fontawesome.com/c0358935d5.js" crossorigin="anonymous"></script>
        <title>{{ config('app.name', 'Inicio Sesion | Campo Alegre') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class=" min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-custom-color">
            <div style="background-image: url('../img/fondo.png')" class=" w-3/4  bg-cover bg-center">
                <div class="w-full sm:max-w-md px-6 py-4 bg-white dark:bg-black shadow-md overflow-hidden">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
