@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 py-2  border-2 border-teal-400 rounded-full text-sm font-medium leading-5 text-gray-500 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'rounded-full px-4 py-2 text-sm font-semibold text-white hover:bg-teal-600 transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
