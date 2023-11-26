<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/c0358935d5.js" crossorigin="anonymous"></script>
        <title>Campo Alegre | Inicio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        
    </head>
    <body class="antialiased">
            <div class=" bg-black p-4 flex justify-between items-center">
                <h1 class="text-3xl text-white bold">Campo Alegre Bailador</h1>
                    @if (Route::has('login'))
            <div class="relative sm:flex sm:justify-end bg-center dark:bg-dots-lighter selection:text-white">
                @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray dark:hover:text-white">{{__('Dashboard')}}</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 text-xl dark:text-gray-400 dark:hover:text-white dark:hover:underline">{{__('Login')}}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-black hover:text-gray-900 text-xl dark:text-gray-400 dark:hover:text-white dark:hover:underline">{{__('Register')}}</a>
                    @endif
                @endauth
            </div>
                @endif
            </div>
        <main>
            <div class="flex items-center flex-col bg-custom-color">
                <h2 class=" pt-2 text-white text-2xl">Campo Alegre Bailador</h2>
                <h2 class=" pt-2 pb-2 text-lg">Cafe Gastrobar</h2>
            </div>
            <div style="background-image: url('../img/fondo.png')" class=" w-full h-full bg-cover bg-center">
                <h1 class=" pt-72 text-6xl text-white text-center">Bienvenido</h1> 
                <h2 class=" pt-4 text-4xl text-white text-center">Campo Alegre Bailador</h2>
                <h3 class=" pt-5 pb-28 text-xl text-white text-center">Abierto desde las 3pm hasta las 12am</h3>       
            </div>
        </main>
    </body>
</html>