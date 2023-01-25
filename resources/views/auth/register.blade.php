<x-layouts.mainLayout>
    <main class="h-screen flex flex-col items-center justify-center">
        <x-layouts.logo />
        <form
            action="register"
            method="post"
            class="grid grid-cols-1 lg:w-1/3 w-2/3 mx-auto gap-4 mt-4 justify-items-center align-middle"
        >
            @csrf
            <x-form.input
                type="text"
                name="name"
                placeholder="Enter name"
            />
            <x-form.input
                type="text"
                name="username"
                placeholder="Enter username"
            />
            <x-form.input
                type="password"
                name="password"
                placeholder="Enter password"
            />
            <x-form.input
                type="password"
                name="password_confirmation"
                placeholder="Confirm password"
            />
            <x-form.submit-button label="Register" />
        </form>
    </main>
    <script>
        let show_password = false;
        let show_password_confirmation = false;

        function toggleShowPassword(element, name) {
            if (name == 'password') {
                show_password = !show_password;
            } else
                show_password_confirmation = !show_password_confirmation;

            let show = name == 'password' ? show_password : show_password_confirmation;
            let input_element = element.previousElementSibling;
            let icon_img = element.firstElementChild;

            input_element.type = show ? 'text' : 'password';
            icon_img.src = show ? 'https://api.iconify.design/mdi:eye.svg' :
                'https://api.iconify.design/mdi:eye-off.svg';
        }
    </script>
</x-layouts.mainLayout>
