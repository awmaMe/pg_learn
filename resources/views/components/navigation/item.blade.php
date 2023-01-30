@php
    $attributes['class'] = 'focus:outline-sky-200 focus:outline-1' . " {$attributes['class']}";
@endphp
<li class="p-2 hover:bg-sky-800 hover:text-white hover:cursor-pointer">
    <a
        {{ $attributes }}
        href="{{ $link }}"
    >{{ $label }}</a>
</li>
