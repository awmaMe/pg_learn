<x-layouts.mainLayout>
    <main class="text-center w-1/3 mx-auto">
        <h2>User Details</h2>
        <form
            class="text-left text-sm flex flex-col gap-4"
            action="user/details"
            method="POST"
        >
            @csrf
            @method('patch')

            <div>
                <p>Name</p>
                <x-form.input
                    type="text"
                    name="name"
                    value="{{ auth()->user()->name }}"
                />
            </div>

            <div>
                <p>Username</p>
                <x-form.input
                    type="text"
                    name="username"
                    value="{{ auth()->user()->username }}"
                />
            </div>

            <x-form.password-input name="current_password">
                <p>Current Password</p>
            </x-form.password-input>

            <x-form.password-input name="password">
                <p>New Password</p>
            </x-form.password-input>

            <x-form.password-input name="password_confirmation">
                <p>Confirm New Password</p>
            </x-form.password-input>

            <div class="flex justify-end">
                <x-form.submit-button label="Submit" />
            </div>
        </form>
    </main>
</x-layouts.mainLayout>
