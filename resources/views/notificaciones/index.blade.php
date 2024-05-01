<x-app-layout>
    <x-slot name="header">
        <!-- component -->
        <!-- Breadcrumb -->
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}"
                    class="text-sm text-lime-700 hover:text-lime-900 inline-flex items-center dark:text-lime-400 dark:hover:text-lime-500">
                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Inicio
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{ route('notificaciones') }}"
                        class="text-lime-700 hover:text-lime-900 ml-1 md:ml-2 text-sm font-medium dark:text-lime-400 dark:hover:text-lime-500">Notificaciones</a>
                </div>
            </li>
        </ol>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center mb-10">Mis Notificaciones</h1>
                    @forelse ($notificaciones as $notificacion)
                    <div class="p-5 border border-gray-200 lg:flex lg:justify-between lg:items-center">
                        <div>
                            <p>
                                Tienes una nueva interaccion en:
                                <span class="font-bold">{{ $notificacion->data['nombre_post'] }}</span>
                            </p>
                            <p>
                                <span class="font-bold">{{ $notificacion->created_at->diffForHumans() }}</span>
                            </p>
                        </div>
                        <div class="mt-5 lg:mt-0">
                            <a href="{{ route('posts.show', $notificacion->data['id_post']) }}"
                                class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg">
                                Ver Post
                            </a>
                        </div>

                    </div>
                    @empty
                    <p class="text-center text-gray-600">No hay Notificaciones Nuevas</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<div>
    <livewire:footer />
</div>