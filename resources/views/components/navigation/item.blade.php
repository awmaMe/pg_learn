{{-- @php
    $attributes['class'] = 'focus:outline-sky-200 focus:outline-1' . " {$attributes['class']}";
@endphp --}}
<a
    {{ $attributes->merge(['class' => 'focus:outline-sky-200 focus:outline-1']) }}
    href="{{ $link }}"
>
    <li class="p-2 hover:bg-sky-800 hover:text-white hover:cursor-pointer">
        {{ $label }}
    </li>
</a>
