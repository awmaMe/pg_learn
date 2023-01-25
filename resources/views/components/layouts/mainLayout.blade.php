<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Itenchisl</title>
    @vite('resources/js/app.js')
</head>

<body>
    <nav class="">
        <ul class="bg-sky-500 text-sm flex justify-end">
            @auth
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
            class="absolute bottom-10 right-1/2 transform translate-x-1/2 text-sm bg-orange-200 p-2 rounded-md duration-200 transition ease-linear"
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

</html>
