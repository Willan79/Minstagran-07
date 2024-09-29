@extends('layouts.app')

@section('titulo')
Inicia sesión
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-6 md:items-center ">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/login.jpg') }}" alt="Alternativa img">
    </div>
    <div class="md:w-4/12 bg-white p-4 shadow-xl rounded-lg">
        <form method="POST" action="{{ route('login') }}">
            @csrf <!--Token de seguridad-->

            @if (@session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ session('mensaje') }}</p>
            @endif

            <div class="mb-3">
                <label for="email" class="text-gray-500">Email</label>
                <input type="email" class="border-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2 w-full rounded-lg" id="email" name="email"
                placeholder="Email"
                value="{{ old('email') }}"
                />
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="text-gray-500">Contraseña</label>
                <input type="password"
                class="border-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2 w-full rounded-lg"  id="password"
                name="password"
                placeholder="password"
               />
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <input type="checkbox" name="remember">
                <label for="password" class="text-gray-500">Mantener mi sesión abierta</label>
            </div>

            <input
            type="submit"
            value="Iniciar sesión"
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 rounded-lg"
            ></input>
        </form>
    </div>
</div>
@endsection
