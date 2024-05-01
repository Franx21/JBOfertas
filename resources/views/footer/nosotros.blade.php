<x-app-layout>
    <x-slot name="header">
        <!-- component -->
        <!-- Breadcrumb -->
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="#"
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
                    <a href="#"
                        class="text-lime-700 hover:text-lime-900 ml-1 md:ml-2 text-sm font-medium dark:text-lime-400 dark:hover:text-lime-500">Código
                        de conducta</a>
                </div>
            </li>
        </ol>
    </x-slot>
    <div class="py-4 items-center">
        <div class="flex gap-2 mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <div class="flex items-center py-16 bg-gray-900">
                <div class="container items-center m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                    <div class="flex items-center space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                        <div class="md:5/12 lg:w-5/12 ">
                            <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png"
                                alt="image" loading="lazy" width="" height="" class="rounded-lg">
                        </div>
                        <div class="md:7/12 lg:w-6/12">
                            <h2 class="text-2xl text-gray-700 font-bold md:text-4xl">OFERTASJB es una pagina que se
                                dedica a la busqueda de ofertas en diferentes tiendas virtuales y fisicas.</h2>
                            <p class="mt-6 text-gray-600">Somos una pagina nueva, que tiene el proposito de crecer y
                                llegar a mas personas que sean apasionadas por las compras y las ofertas!</p>
                            <p class="mt-4 text-gray-600">Si te gustan las ofertas y las compras siguenos en nuestra
                                pagina y nuestras redes sociales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <livewire:footer />
    </div>
</x-app-layout>