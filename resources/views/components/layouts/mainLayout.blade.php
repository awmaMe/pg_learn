<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Itenchisl</title>
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-900 text-white">
    <nav class="mb-4">
        <ul class="bg-slate-300 lg:text-sm flex justify-end text-black">
            @auth
                <x-navigation.item
                    link="settings"
                    label="Settings"
                />
                <x-navigation.item
                    link="logout"
                    label="Log Out"
                />
            @else
                <x-navigation.item
                    link="register"
                    label="Register"
                />
                <x-navigation.item
                    link="login"
                    label="Log In"
                />
            @endauth
        </ul>
    </nav>
    {{ $slot }}

    @if (session()->has('flash-message'))
        <div
            id="flash-message"
            @class([
                'absolute',
                'bottom-10',
                'right-1/2',
                'transform',
                'translate-x-1/2',
                'text-sm',
                'p-2',
                'rounded-md',
                'duration-200',
                'transition',
                'ease-linear',
                'text-black',
                'bg-orange-300' => session('flash-message-type') == 'warning',
                'bg-blue-300' => session('flash-message-type') == 'positive',
            ])
        >
            {{ session('flash-message') }}
            <script>
                setTimeout(() => {
                    document.getElementById("flash-message").remove();
                }, 3000);
            </script>
        </div>
    @endif

</body>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>

</html>
