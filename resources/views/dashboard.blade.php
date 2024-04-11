<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-lime-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex gap-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex-none w-auto bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:listar-categorias />
                </div>
            </div>
            <div class="flex-1 w-64 bg-white flex col-span-3 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hola, bienvenido a JBOfertas!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>