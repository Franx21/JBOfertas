<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-center text-gray-800 dark:text-lime-200 leading-tight">
            {{ __('Nuevas Ofertas!') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden w-full shadow-sm sm:rounded-lg">
                <div class=" text-lime-900 dark:text-lime-500">
                    <div class="md:flex md:justify-center p-5">
                        <livewire:listar-post />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>