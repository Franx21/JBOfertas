<x-app-layout>
    <x-slot name="header">
        <!-- component -->
        <!-- Breadcrumb -->
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}"
                    class="text-lg text-lime-700 hover:text-lime-900 inline-flex items-center dark:text-lime-400 dark:hover:text-lime-500">
                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Inicio
                </a>
            </li>
        </ol>
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
</x-app-layout>
<div>
    <livewire:footer />
</div>