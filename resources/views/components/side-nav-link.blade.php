@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex items-center px-4 py-2 mt-5 bg-violet-200 rounded-full text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'flex items-center px-4 py-2 mt-5 text-gray-600 rounded-full transition-colors duration-300 transform hover:bg-gray-100  hover:text-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
