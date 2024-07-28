@props([
    'active' => false,
    'type' => 'a'
])

@php
    $classes = 'block px-3 py-2 rounded-md text-base font-medium';
    if ($active) {
        $classes .= ' bg-gray-900 text-white';
    } else {
        $classes .= ' text-gray-300 hover:bg-gray-700 hover:text-white';
    }
@endphp

@if ($type === 'a')
    <a
        {{ $attributes->merge(['class' => $classes]) }}
        aria-current="{{ $active ? "page" : "false"}}"
        {{ $attributes }}
    >
        {{$slot}}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => $classes]) }}
        aria-current="{{ $active ? "page" : "false"}}"
        {{ $attributes }}
    >
        {{$slot}}
    </button>
@endif
