<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-lime-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
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