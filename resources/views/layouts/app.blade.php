<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>MinStagram - @yield('titulo')</title>

    </head>
    <body class="bg-gray-100">
        <header class="p-5 boerder-b bg-amber-500">
            <div class="container mx-auto flex justify-between">
                <h1 class="text-3xl font-black">MinStagram</h1>

                <!--Autenticado-->
                @auth
                <nav class="flex gap-4 items-center">
                    <a class="bg-amber-400 p-2 text-gray-800 rounded font-bold" href="{{ route('post.create') }}">
                        Crear
                    </a>

                    <a href="{{ route('post.index', auth()->user()->username) }}">Hola: {{ auth()->user()->username }}</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            Cerrar sesión
                        </button>
                    </form>
                </nav>
                @endauth

                <!--No autenticado-->
                @guest
                <nav class="flex gap-4 items-center font-bold">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Crear Cuenta</a>
                </nav>
                @endguest


            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class=" text-center mb-10 text-3xl">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 mt-10">
            MinStagram todos los derechos reservados  {{ now()->year }}
        </footer>
    </body>
</html>
