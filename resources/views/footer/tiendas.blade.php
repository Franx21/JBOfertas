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
        <div class="flex mx-auto justify-center py-4">
            <!-- component -->
            <div class="da relative grid grid-cols-4 gap-4 flex-col justify-center overflow-hidden bg-gray-50">
                <div class="absolute inset-0 bg-center dark:bg-gray-900"></div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/logo-amazon.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Amazon</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Encuentra de todo.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/aliexpress-logo.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Aliexpress</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Importa de todo.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/adidas-8.svg')}}"
                            class="animate-fade-in h-56 w-56 justify-center items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Adidas</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Nada es imposible.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/bodega-aurrera.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">BodegaAurrera</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">La campeona de los precios bajos.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/liverpool_logo.svg')}}"
                            class="animate-fade-in block items-center w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Liverpool</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Liverpool es parte de mi vida.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/calvin_klein_logo.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Calvin Klein</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Entre el amor y la locura está la
                            obsesión.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/logo-lg.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">LG</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Life's Good.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/mercadolibre.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Mercado Libre</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Lo mejor está llegando y vamos a estar
                            ahí para crearlo.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/Office_Depot_Logo.svg')}}"
                            class="animate-fade-in block w-full items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Office Depot</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Usted cuida su negocio. Nosotros le
                            cuidamos a usted.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/puma-logo.svg')}}"
                            class="animate-fade-in block h-full w-80 items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Puma</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Mira al juego como lo hacemos nosotros.
                        </h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/under-armour-logo.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Under Armour</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">WILL YOU PROTECT THIS HOUSE?.</h1>
                    </div>
                </div>
                <div
                    class="group relative m-0 flex h-40 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div
                        class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                        <img src="{{ asset('uploads/tiendas/walmart.svg')}}"
                            class="animate-fade-in block items-center scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                            alt="" />
                    </div>
                    <div
                        class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                        <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Walmart</h1>
                        <h1 class="text-sm font-light text-gray-200 shadow-xl">Ahorra dinero, vive mejor.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <livewire:footer />
    </div>
</x-app-layout>