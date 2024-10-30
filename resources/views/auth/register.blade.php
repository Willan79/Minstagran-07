@extends('layouts.app')

@section('titulo')
Registro de Usuario
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-6 md:items-center ">
    
    <div class="md:w-4/12 bg-white p-4 shadow-xl rounded-lg">
        <form action="{{ route('register') }}" method="POST">
            @csrf <!--Token de seguridad-->
            <div class="mb-3">
              <label for="name" class="text-gray-500">Nombre</label>
              <input type="text" class="p-2 w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:outline-none" id="name" name="name"
              placeholder="Nombre"
              value="{{ old('name') }}"
              />
              @error('name')
               <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
              @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="text-gray-500">Nombre de usuario</label>
                <input type="text" class="border-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2 w-full rounded-lg" id="username" name="username"
                placeholder="Nombre de usuario"
                value="{{ old('username') }}"
                />
                @error('username')
                  <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

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

            <div class="mb-3">
                <label for="password_confirmation" class="text-gray-500">Confirmar contraseña</label>
                <input type="password" class="border-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2 w-full rounded-lg" id="password_confirmation" name="password_confirmation"
                placeholder="Confirmar password"

                />
            </div>

            <input
            type="submit"
            value="Crear Cuenta"
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 rounded-lg"
            ></input>
        </form>
    </div>
</div>
@endsection
