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
        <div class="flex justify-between bg-slate-700 lg:text-sm">
            <ul class="flex">
                <x-navigation.item
                    link="home"
                    label="Home"
                />
            </ul>
            <ul class="flex justify-end">
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
        </div>
    </nav>
    {{ $slot }}

    @if (session()->has('flash-message'))
        <div
            id="flash-message"
            @class([
                'absolute',
                'bottom-0',
                'right-1/2',
                'text-sm',
                'p-2',
                'rounded-md',
                'animate-toast',
                'mx-auto',
                'bg-orange-400 text-gray-900' => session('flash-message-type') == 'warning',
                'bg-blue-600' => session('flash-message-type') == 'info',
            ])
        >
            {{ session('flash-message') }}
            <script>
                let el = document.getElementById("flash-message");
                el.addEventListener('animationend', () => {
                    el.remove();
                })
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
