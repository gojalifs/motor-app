<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplikasi Kendaraan | Motor</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-open antialiased bg-gray-100 h-screen flex items-center justify-center">

    <div class="mx-auto bg-white border rounded-md w-[500px] p-4 align-middle">
        <div class="text-2xl text-center">Login</div>
        <form action="{{ route('login.post') }}" method="post" class="mt-8">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required placeholder="Masukkan email..." autofocus
                    class="rounded-md border-gray-300 w-full mt-3">
            </div>
            <div class="mt-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Masukkan password..."
                    class="rounded-md border-gray-300 w-full mt-3">
            </div>
            <div class="text-center">
                <button type="submit" class="px-4 py-2 mt-4 bg-blue-200 mx-auto rounded-md hover:bg-blue-300">Login</button>
            </div>
        </form>
    </div>

</body>

</html>
