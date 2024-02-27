<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div
            class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/2 px-10">
                <form action="{{ route('imagenes.store') }}" method="POST" id="dropzone" novalidate
                    enctype="multipart/form-data"
                    class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                </form>
            </div>
            <div class="md:w-1/2 px-10 bg-white rounded-lg mt-10 md:mt-0">
                <form action="{{ route('posts.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="mb-5">
                        <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                            Titulo
                        </label>
                        <input id="titulo" name="titulo" type="text" placeholder="El titulo" class="border p-3 w-full rounded-lg @error('titulo')
                                        border-red-500 
                                    @enderror" value="{{ old('titulo') }}" />
                        @error('titulo')
                        <p class="bg-red-500 my-2 p-2 text-center text-white border rounded-lg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                            Descripcion
                        </label>
                        <textarea id="descripcion" name="descripcion" type="text" placeholder="Descripcion del post"
                            class="border p-3 w-full rounded-lg @error('descripcion')
                                        border-red-500 
                                    @enderror" value=""></textarea>
                        @error('descripcion')
                        <p class="bg-red-500 my-2 p-2 text-center text-white border rounded-lg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <input type="hidden" name="imagen" value="{{ old('imagen') }}">
                        @error('imagen')
                        <p class="bg-red-500 my-2 p-2 text-center text-white border rounded-lg">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="submit" value="Crear Publicacion"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg ">
                </form>
            </div>
        </div>

    </x-app-layout>
</div>