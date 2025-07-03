@props(['active'])

@php
$classes = ($active ?? false)
   ? 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base font-medium leading-5 text-[#0C356A] focus:outline-none transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-[#F97316] hover:border-[#F97316] focus:outline-none focus:text-[#F97316] focus:border-[#F97316] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
