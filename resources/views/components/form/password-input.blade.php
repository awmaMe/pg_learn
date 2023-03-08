<div
    class="w-full"
    x-data="{
        'show_password': false,
        'img_url': 'https://api.iconify.design/mdi:eye-off.svg',
        'type': 'password',
        toggleShowPassword() {
            this.show_password = !this.show_password;
            if (this.show_password) {
                this.img_url = 'https://api.iconify.design/mdi:eye.svg';
                this.type = 'text';
            } else {
                this.img_url = 'https://api.iconify.design/mdi:eye-off.svg';
                this.type = 'password';
            }
        }
    }"
>
    {{ $slot }}

    <x-form.input
        type="password"
        :name="$name"
        x-bind:type="type"
        {{ $attributes }}
    />
</div>
