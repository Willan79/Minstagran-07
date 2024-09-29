@extends('layouts.app')

@section('titulo')
Perfil: {{ $user->username }}
@endsection


@section('contenido')

<div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">

        <div class="md:w-8/12 md:lg:w-6/12 px-5 flex flex-col items-center md:justify-center">
            <img src="{{ asset('img/w2.png') }}" alt="Imagen de usuario">
        </div>

        <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start">
            <p class="text-gray-500 text-2xl mb-3 font-bold">{{ $user->username }}</p>

            <p class="text-gray-800 text-sm mb-3 font-bold">
                0
                <span>Seguidores</span>
            </p>
            <p class="text-gray-800 text-sm mb-3 font-bold">
                0
                <span>Siguiendo</span>
            </p>
            <p class="text-gray-800 text-sm mb-3 font-bold">
                0
                <span>Posts</span>
            </p>
        </div>

    </div>
</div>

@endsection
