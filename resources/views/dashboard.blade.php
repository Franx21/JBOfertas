<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-lime-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-4 items-center">
        <div class="flex gap-2 mx-auto sm:px-6 lg:px-8">
            <div class="flex-none w-auto bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:listar-categorias />
                </div>
            </div>
            <div class="flex  bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:home-posts />
                </div>
            </div>
        </div>
    </div>
    <div>
        <livewire:footer />
    </div>
</x-app-layout>