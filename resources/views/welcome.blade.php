<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Postgres</title>
    @vite('resources/js/app.js')
</head>

<body>
    @foreach ($users as $user)
        <div class="flex justify-evenly w-2/3 mx-auto">
            <div class="w-1/3">hello</div>
            <div class="w-2/3">{{ $user->name }}</div>
        </div>
    @endforeach
</body>

</html>
