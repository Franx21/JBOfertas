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
            <section class="py-10 relative bg-gray-900 sm:py-16 lg:py-24 lg:pt-36">
                <svg id="visual" viewBox="0 0 2000 600" class="w-full   absolute top-0 left-0 z-0 "
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                    <path
                        d="M0 18L65 18L65 66L129 66L129 37L194 37L194 44L258 44L258 25L323 25L323 35L387 35L387 36L452 36L452 38L516 38L516 34L581 34L581 26L645 26L645 68L710 68L710 32L774 32L774 27L839 27L839 29L903 29L903 31L968 31L968 83L1032 83L1032 65L1097 65L1097 57L1161 57L1161 66L1226 66L1226 90L1290 90L1290 66L1355 66L1355 32L1419 32L1419 35L1484 35L1484 18L1548 18L1548 94L1613 94L1613 96L1677 96L1677 72L1742 72L1742 88L1806 88L1806 42L1871 42L1871 46L1935 46L1935 33L2000 33L2000 18L2000 0L2000 0L1935 0L1935 0L1871 0L1871 0L1806 0L1806 0L1742 0L1742 0L1677 0L1677 0L1613 0L1613 0L1548 0L1548 0L1484 0L1484 0L1419 0L1419 0L1355 0L1355 0L1290 0L1290 0L1226 0L1226 0L1161 0L1161 0L1097 0L1097 0L1032 0L1032 0L968 0L968 0L903 0L903 0L839 0L839 0L774 0L774 0L710 0L710 0L645 0L645 0L581 0L581 0L516 0L516 0L452 0L452 0L387 0L387 0L323 0L323 0L258 0L258 0L194 0L194 0L129 0L129 0L65 0L65 0L0 0Z"
                        fill="#eaeaea" stroke-linecap="square" stroke-linejoin="miter"></path>
                </svg>

                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 text-center  ">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 class="text-2xl font-light text-gray-700 sm:text-4xl sm:leading-tight">Nuestra Pagina web
                            aun no cuenta con patrocinadores
                            o socios.
                        </h2>
                    </div>

                    {{-- <div
                        class=" grid items-center max-w-4xl grid-cols-2 gap-4 mx-auto mt-12 md:mt-20 md:grid-cols-4  ">
                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-6 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-1.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-2.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-3.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full mx-auto h-7"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-4.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-5.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-6.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-7.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-8.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-9.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full mx-auto h-7"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-10.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-11.png"
                                alt="">
                        </div>

                        <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                            <img class="object-contain w-full h-8 mx-auto"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-12.png"
                                alt="">
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-10 space-x-3 md:hidden">
                        <div class="w-2.5 h-2.5 rounded-full bg-blue-600 block"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                    </div>

                    <p
                        class="mt-10 text-base text-center text-black md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
                        and, more companies</p> --}}
                </div>
            </section>
        </div>
    </div>
    <div>
        <livewire:footer />
    </div>
</x-app-layout>