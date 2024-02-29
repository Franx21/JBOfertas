<div class="flex flex-row items-center md:items-center w-full">
    <div class="md:w-1/2 px-10">
        <form action="" method="POST" id="dropzone" novalidate enctype="multipart/form-data"
            class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
            @csrf
        </form>
    </div>
    <div class="md:w-1/2 px-10 bg-white dark:bg-gray-800 rounded-lg mt-10 md:mt-0">
        <form action="" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <x-input-label for="titulo" :value="__('Titulo')" />
                <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
                    required autofocus autocomplete="titulo" />
                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
            </div>
            <div class="mb-5">
                <x-input-label for="titulo" :value="__('Titulo')" />
                <textarea id="descripcion" name="descripcion" type="text" placeholder="Descripcion del post" class="border p-3 w-full rounded-lg @error('descripcion')
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