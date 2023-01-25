<x-layouts.mainLayout>
    <main class="h-screen flex flex-col items-center justify-center">
        <form
            action="login"
            method="post"
            class="grid grid-cols-1 lg:w-1/3 w-2/3 mx-auto gap-4 mt-4 justify-items-center align-middle"
        >
            @csrf
            <x-form.input
                type="text"
                name="username"
                placeholder="Username"
            />
            <x-form.input
                type="password"
                name="password"
                placeholder="Password"
            />

            <button
                type="submit"
                class="text-sm bg-blue-200 p-2 rounded-md"
            >Login</button>
        </form>
    </main>

    <script>
        let show_password = false;

        function toggleShowPassword(element, name) {
            show_password = !show_password;
            let input_element = element.previousElementSibling;
            let icon_img = element.firstElementChild;

            input_element.type = show_password ? 'text' : 'password';
            icon_img.src = show_password ? 'https://api.iconify.design/mdi:eye.svg' :
                'https://api.iconify.design/mdi:eye-off.svg';
        }
    </script>
</x-layouts.mainLayout>
