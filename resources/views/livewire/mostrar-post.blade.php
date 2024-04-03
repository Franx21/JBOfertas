<div class="container flex md:flex-col">
    <div class="flex flex-col items-center lg:flex md:flex-row md:gap-8 md:justify-center ">
        <img src="{{ asset('uploads/posts') . '/' . $post->imagen_id }}" class=" h-96 w-96 rounded-lg"
            alt="Imagen del post {{ $post->titulo }}">
        <div class="pt-3">
            <div class="sm:max-w-2xl pt-4 pb-2">
                <p class="text-justify sm:text-xl sm:py-2 font-extrabold text-gray-600">
                    {{ $post->titulo }}
                </p>
            </div>
            <div class="flex justify-between text-sm">
                <p class="px-2 font-bold uppercase">{{ $post->user->username }}</p>
            </div>
            <div class="flex divide-x sm:items-center py-1 px-1 divide-lime-500 text-sm">
                <div class="flex divide-x divide-lime-500">
                    <p class=" text-gray-600 px-2 font-bold">Precio de oferta: <span class=" text-lime-500">${{
                            $post->precio_oferta}}</span></p>
                    @if ($post->precio_regular)
                    <p class="text-gray-600 px-2 font-bold">Precio Regular: <span
                            class="text-red-500 px-2 line-through proportional-nums font-bold">
                            ${{ $post->precio_regular }}</span></p>
                    @endif
                </div>
                <div>
                    <p class=" px-2 text-lime-500 capitalize font-bold">{{ $post->tienda }}</p>
                </div>
            </div>
            <p class="mt-5 text-gray-600 mb-3">{{ $post->descripcion }}</p>
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
            <div class="flex items-center gap-3">
                @auth
                @if ($post->user_id === auth()->user()->id)
                <form method="POST" action="{{ route('posts.destroy', $post) }}">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Eliminar Publicacion"
                        class="bg-red-500 hover:bg-red-600 p-2 rounded text-white font-bold mt-4 cursor-pointer">
                </form>
                @endif
                <div class="flex items-center pt-4 gap-3">
                    @auth
                    <livewire:like-post :post="$post" />
                    <livewire:save-post :post="$post" />
                    @endauth
                </div>
                @endauth
            </div>
            <div>
                <x-primary-button class="mt-2 h-10 font-bold text-lg w-full">
                    {{ __('Ver Oferta!') }}
                </x-primary-button>
            </div>
        </div>
    </div>
    <div class="p-5">
        <div class="shadow bg-gray-900 p-5 mb-5 rounded-md">
            @auth
            <p class="text-xl font-bold text-center mb-4 uppercase">comentarios</p>
            <form action="{{ route('comentario.store', ['post' => $post]) }}" method="POST">
                @if (session('mensaje'))
                <div class="bg-green-500 p-2 rounded-lg mb-6 text-white uppercase font-bold">
                    {{ session('mensaje') }}
                </div>
                @endif
                @csrf
                <div class="mb-5">
                    <label for="comentario" class="mb-2 block uppercase text-lime-500 font-bold">
                        AGREGA UN COMENTARIO
                    </label>
                    <textarea id="comentario" name="comentario" type="text" placeholder="Escribe tu comentario" class="bg-gray-900 border-lime-500 p-3 w-full rounded-lg @error('comentario')
                                @enderror" value=""></textarea>
                    @error('comentario')
                    <p class="bg-red-500 my-2 p-2 text-center text-white border rounded-lg">{{ $message }}</p>
                    @enderror
                </div>
                <x-primary-button class="mt-2 h-10 font-bold text-lg w-full">
                    {{ __('Comentar!') }}
                </x-primary-button>
            </form>
            @endauth
            <div class="bg-white shadow mb-5 max-h-96 overflow-y-scroll mt-10">
                @if ($post->comentario->count())
                @foreach ($post->comentario as $comentario)
                <div class="p-5 border-lime-500 border-b bg-gray-900">
                    <a href="{{ route('posts.index', $comentario->user) }}" class="font-bold text-gray-600 uppercase">{{
                        $comentario->user->username }}</a>
                    <p>{{ $comentario->comentario }}</p>
                    <p class="text-sm text-gray-500">{{ $comentario->created_at->diffForHumans() }}</p>
                </div>
                @endforeach
                @else
                <p class="p-10 text-center bg-gray-900">No hay comentarios aun!</p>
                @endif
            </div>
        </div>
    </div>
</div>