<x-layouts.mainLayout>
    <main class="h-screen flex flex-col items-center justify-center">
        <x-layouts.logo />
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
            <x-form.password-input
                name="password"
                placeholder="Password"
            />
            <x-form.submit-button label="Login" />
        </form>
    </main>
</x-layouts.mainLayout>
