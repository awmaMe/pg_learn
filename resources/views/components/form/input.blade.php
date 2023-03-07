<div class="w-full flex flex-col justify-start text-black">
    <div class="w-full relative">
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            class="p-2 text-sm focus:outline focus:outline-blue-300 rounded-sm w-full bg-gray-200"
            autocomplete="off"
            value="{{ old($name) }}"
            readonly
            onfocus="this.removeAttribute('readonly')"
            {{ $attributes }}
        >
        @if ($type == 'password')
            <i
                id="{{ $name }}"
                class="absolute right-2 w-6 h-full hover:cursor-pointer"
                onclick="toggleShowPassword(this, '{{ $name }}')"
            >
                <img
                    src="https://api.iconify.design/mdi:eye-off.svg"
                    alt="show password"
                    width="100%"
                    class="translate-y-1.5"
                >
            </i>
        @endif
    </div>

    @error($name)
        <div class="text-xs text-red-800">
            {{ $message }}
        </div>
    @enderror
</div>
