{{--
<livewire:filtrar-vacantes /> --}}
<div class="container sm:w-full sm:mx-auto">
    <div>
        <h3 class="text-center font-extrabold text-4xl text-lime-500 mb-12 mt-5">
            Nuevas Ofertas Disponibles
        </h3>
    </div>
    <div class="bg-white dark:bg-gray-900 shadow-sm rounded-lg p-6 divide-y divide-lime-500">
        @forelse ($posts as $post)
        <div class="flex flex-col items-center py-4 sm:flex sm:h-full sm:py-5 md:flex-row">
            <img class="lg:object-cover  rounded-lg md:w-44 md:h-44"
                src="{{ asset('uploads/posts') . '/' . $post->imagen_id }}" alt="Imagen del post {{ $post->titulo }}">
            <div class="flex flex-col sm:pl-5 w-auto justify-between">
                <div class="sm:flex sm:justify-between">
                    <div class="sm:max-w-2xl pt-4 pb-2">
                        <a class="text-justify sm:text-xl sm:py-2 font-extrabold text-gray-600"
                            href="{{ route('posts.show', ['post' => $post->id]) }}">
                            {{ $post->titulo }}
                        </a>
                    </div>
                    <div class="flex sm:pt-4">
                        @if ($post->primer_dia)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4 md:w-6 md:h-6 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                        <p class="text-xs pl-1 text-gray-600 font-bold">
                            <span class="md:text-lg font-bold">
                                {{ $post->primer_dia }}
                            </span>
                        </p>
                        @endif
                    </div>

                </div>

                <div class="flex divide-x sm:items-center py-2 px-1 divide-lime-500 text-sm">
                    <div class="flex divide-x divide-lime-500">
                        <p class=" text-gray-600 px-2">Precio de oferta: <span class=" text-lime-500">${{
                                $post->precio_oferta}}</span></p>
                        @if ($post->precio_regular)
                        <p class=" text-red-500 px-2 line-through proportional-nums">${{ $post->precio_regular }}</p>
                        @endif
                    </div>
                    <div>
                        <p class=" px-2 text-lime-500 normal-case">{{ $post->tienda }}</p>
                    </div>
                </div>
                <div class="text-xs py-2 text-gray-600 font-bold">
                    <span class="text-sm md:text-lg font-bold line-clamp-2 text-clip overflow-hidden">
                        {{ $post->descripcion }}
                    </span>
                </div>
                <div class="flex justify-between items-end">
                    <div class="flex gap-2">
                        <x-primary-button class="mt-2 h-10 font-bold text-lg">
                            {{ __('Ver Oferta!') }}
                        </x-primary-button>
                        <div class="flex items-center pt-4 gap-3">
                            @auth
                            <livewire:like-post :post="$post" />
                            <livewire:save-post :post="$post" />
                            @endauth
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                {{ $post->comentario->count() }}
                                comentarios
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="pl-1 md:text-xs text-gray-600 font-bold">
                            <span class="text-sm md:text-lg font-bold">
                                {{ $post->created_at->locale('es')->diffForHumans() }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay ofertas aun</p>
        @endforelse
    </div>
</div>