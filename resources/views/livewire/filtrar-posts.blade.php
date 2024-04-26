<div class="max-w-7xl mx-auto">
    <form wire:submit.prevent='leerDatosFormulario'>
        <div class="flex gap-3 items-center pb-4">
            <input wire:model='termino' id="termino" type="text" placeholder="Buscar por Término: ej. Laravel"
                class="flex flex-1 w-40 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
            <x-primary-button class="h-10 font-bold text-lg">
                {{ __('Buscar!') }}
            </x-primary-button>
        </div>
    </form>
</div>