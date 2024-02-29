<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-center text-gray-800 dark:text-lime-200 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center mb-10">Publicar Oferta</h1>
                    <div class="md:flex md:justify-center p-5">
                        <livewire:crear-post />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>