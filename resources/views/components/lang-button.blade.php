@props(['name', 'active' => false])

@php
    $classes = 'text-3xl text-2xl border-2 border-white rounded-full w-14 h-14';
    if ($active) $classes .= ' bg-white text-black';
@endphp

<a href="/language/{{ $name }}">
    <button {{ $attributes(['class' => $classes]) }}>
        {{ $name }}
    </button>
</a>
