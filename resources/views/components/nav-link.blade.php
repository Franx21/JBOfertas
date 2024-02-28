@props(['active'])

@php
$classes = ($active ?? false)
? 'overflow-hidden relative bg-lime-500 text-black py-4 font-bold uppercase -- before:block
before:absolute before:h-full before:w-1/2 before:rounded-full before:bg-white before:top-0 before:left-1/4
before:transition-transform before:opacity-0 before:hover:opacity-100 hover:text-white hover:before:animate-ping
transition-all duration-300'
: 'overflow-hidden relative bg-lime-500 text-black py-4 font-bold uppercase -- before:block
before:absolute before:h-full before:w-1/2 before:rounded-full before:bg-white before:top-0 before:left-1/4
before:transition-transform before:opacity-0 before:hover:opacity-100 hover:text-white hover:before:animate-ping
transition-all duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>