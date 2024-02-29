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
            {{-- titulo --}}
            <div class="mb-5">
                <x-input-label for="titulo" :value="__('Titulo')" class="pb-1" />
                <x-text-input id=" titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
                    required autofocus autocomplete="titulo" />
                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
            </div>
            {{-- link --}}
            <div class="mb-5">
                <x-input-label for="link" :value="__('Link')" class="pb-1" />
                <x-text-input id=" link" class="block mt-1 w-full" type="text" name="link" :value="old('link')" required
                    autofocus autocomplete="link" />
                <x-input-error :messages="$errors->get('link')" class="mt-2" />
            </div>
            {{-- precio --}}
            <div class="flex justify-between">
                <div class="mb-5 w-60">
                    <x-input-label for="precio_oferta" :value="__('Precio en oferta')" class="pb-1" />
                    <x-text-input id=" precio_oferta" class="block mt-1 w-full" type="text" name="precio_oferta"
                        :value="old('precio_oferta')" required autofocus autocomplete="precio_oferta" />
                    <x-input-error :messages="$errors->get('precio_oferta')" class="mt-2" />
                </div>
                <div class="mb-5 w-60">
                    <x-input-label for="precio_regular" :value="__('Precio regular')" class="pb-1" />
                    <x-text-input id=" precio_regular" class="block mt-1 w-full" type="text" name="precio_regular"
                        :value="old('precio_regular')" required autofocus autocomplete="precio_regular" />
                    <x-input-error :messages="$errors->get('precio_regular')" class="mt-2" />
                </div>
            </div>
            <div class="flex justify-between">
                <div class="mb-5 w-60">
                    <x-input-label for="envio" :value="__('Precio de Envio')" class="pb-1" />
                    <x-text-input id=" envio" class="block mt-1 w-full" type="text" name="envio" :value="old('envio')"
                        required autofocus autocomplete="envio" />
                    <x-input-error :messages="$errors->get('envio')" class="mt-2" />
                </div>
                <div class="mb-5 w-60">
                    <x-input-label for="tienda" :value="__('Tienda')" class="pb-1" />
                    <x-text-input id=" tienda" class="block mt-1 w-full" type="text" name="tienda"
                        :value="old('tienda')" required autofocus autocomplete="tienda" />
                    <x-input-error :messages="$errors->get('tienda')" class="mt-2" />
                </div>
            </div>
            {{-- cupon --}}
            <div class="mb-5">
                <x-input-label for="cupon" :value="__('Cupon')" class="pb-1" />
                <x-text-input id=" cupon" class="block mt-1 w-full" type="text" name="cupon" :value="old('cupon')"
                    required autofocus autocomplete="cupon" />
                <x-input-error :messages="$errors->get('cupon')" class="mt-2" />
            </div>
            <!-- Categoria -->
            <div class="mb-5">
                <x-input-label for="categoria" :value="__('Categoria')" />
                <select wire:model='categoria' name="categoria" id="categoria"
                    class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option>-- Seleccione --</option>
                    {{-- @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach --}}
                </select>
                <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
            </div>
            {{-- calendario --}}
            <div class="flex justify-between">
                <!-- calendario inicio -->
                <div class="mb-5 w-60">
                    <x-input-label for="primer_dia" :value="__('¿Cuándo empieza?')" />
                    <x-text-input wire:model="primer_dia" id="primer_dia"
                        class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        type="date" name="primer_dia" autocomplete="primer_dia" />
                    <x-input-error :messages="$errors->get('primer_dia')" class="mt-2" />
                </div>
                <!-- calendario final -->
                <div class="mb-5 w-60">
                    <x-input-label for="ultimo_dia" :value="__('¿Cuándo termina?')" />
                    <x-text-input wire:model="ultimo_dia" id="ultimo_dia"
                        class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        type="date" name="ultimo_dia" autocomplete="ultimo_dia" />
                    <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
                </div>
            </div>
            {{-- DESCRIPCION --}}
            <div class="mb-5">
                <x-input-label for="descripcion" :value="__('Descripcion')" class="pb-2" />
                <textarea id="descripcion" name="descripcion" type="text" placeholder="Descripcion del post" class="border p-3 w-full border-gray-300 dark:border-gray-700
                                    dark:bg-gray-900 dark:text-lime-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500
                                    dark:focus:ring-lime-600 rounded-md shadow-sm" value=""></textarea>
                @error('descripcion')
                <p class="bg-red-500 my-2 p-2 text-center text-white border rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <x-primary-button class="w-full h-10 font-bold text-lg">
                    {{ __('Publicar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>