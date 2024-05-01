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
        <div class="flex mx-auto justify-center items-center py-4">
            <!-- component -->
            <!-- Tailwind Play: https://play.tailwindcss.com/qIqvl7e7Ww  -->


            <div class="flex flex-col items-center justify-start bg-gray-900">
                <div class="mx-auto w-full max-w-lg pb-10">
                    <h1 class="text-4xl font-medium text-gray-600">Hola, como podemos ayudarte?</h1>
                    <p class="mt-3 text-gray-700">Trataremos de solucionar tus problemas o dudas lo mas rapido posible,
                        gracias por su paciencia.</p>
                </div>
                <div class="mx-auto w-full max-w-lg">
                    <h1 class="text-4xl font-medium text-gray-600">Contactenos</h1>
                    <p class="mt-3 text-gray-700">Mandenos sus preguntas a el correo help@domain.com</p>

                    {{-- <form action="https://api.web3forms.com/submit" class="mt-10">

                        <!-- This is a working contact form. 
           Get your free access key from: https://web3forms.com/  -->

                        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="relative z-0">
                                <input type="text" name="name"
                                    class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                                    placeholder=" " />
                                <label
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your
                                    name</label>
                            </div>
                            <div class="relative z-0">
                                <input type="text" name="email"
                                    class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                                    placeholder=" " />
                                <label
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your
                                    email</label>
                            </div>
                            <div class="relative z-0 col-span-2">
                                <textarea name="message" rows="5"
                                    class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                                    placeholder=" "></textarea>
                                <label
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your
                                    message</label>
                            </div>
                        </div>
                        <button type="submit" class="mt-5 rounded-md bg-black px-10 py-2 text-white">Send
                            Message</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<div>
    <livewire:footer />
</div>