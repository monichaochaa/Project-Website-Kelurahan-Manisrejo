<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kelurahan Manisrejo</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js') 
</head>
<body class="bg-gray-100 text-gray-800">
    @include('components.navbar')
    <div class="flex flex-row flex-grow">
        <main class="flex-grow p-6">
            @yield('content')
        </main>
        <x-sidebar />
    </div>
    @include('components.footer')
</body>
</html>