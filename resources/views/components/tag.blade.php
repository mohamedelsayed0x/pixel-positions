@props(['size' => 'base'])

@php
    $classes = 'rounded-full bg-white/10 font-medium transition duration-300 hover:bg-blue-500';
    if ($size == 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size == 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }
@endphp

<a href="#" class="{{ $classes }}">
    {{ $slot }}
</a>
