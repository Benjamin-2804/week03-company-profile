<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900 font-sans">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    @vite('resources/js/app.js')
</body>
</html>
