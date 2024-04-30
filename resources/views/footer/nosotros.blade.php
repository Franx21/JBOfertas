<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-lime-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
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