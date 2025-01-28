@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 text-colorRojo  text-text16 font-medium leading-5 focus:outline-none  transition'
            : 'inline-flex items-center px-1 pt-1 text-white   text-text16 font-medium leading-5 hover:text-colorRojo  focus:outline-none focus:text-colorRojo  transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
