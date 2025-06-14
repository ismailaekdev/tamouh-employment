@props(['active'])

@php
    $classes = Arr::toCssClasses(['block py-2 px-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 | lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0', 'text-white bg-primary-700 | lg:bg-transparent lg:text-primary-700' => $active]);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
