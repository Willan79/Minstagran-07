@extends('layouts.app')

@section('titulo')

Crea una nueva publicación

@endsection


@section('contenido')

<div class="md:flex md:justify-center md:gap-6 md:items-center">
    <div class="md:w-1/2">
        <form action="" id="dropzone" class="dropzone border-dashed border-4 w-full h-96 rounded flex flex-col justify-center items-center">
        </form>
    </div>

    <div class="md:w-5/12 bg-white p-10 mt-10 md.mt-0 rounded-lg shadow-xl">
        <form >
            @csrf <!--Token de seguridad-->

            <div >
                <label for="titulo" class="text-gray-500">Titulo</label>
                <input type="text" class="p-2 w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:outline-none" id="titulo" name="titulo"
                placeholder="Tu titulo"
                value="{{ old('titulo') }}"
                />
                @error('titulo')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div >
                <label for="descripcion" class="text-gray-500">descripcion</label>
                <textarea type="textarea" class="p-2 w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:outline-none" id="descripcion" name="descripcion"
                placeholder="Tu dsecripcion"
                >{{ old('titulo') }}</textarea>

                @error('descripcion')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <input
            type="submit"
            value="Publicar"
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 rounded-lg"
            ></input>
        </form>
    </div>


</div>


@endsection
