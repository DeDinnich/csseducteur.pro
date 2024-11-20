<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CSSeducteur')</title>
    <!-- CSS -->
    @vite(['resources/css/app.css'])
</head>
<body>
    <!-- Inclusion du header -->
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <!-- Inclusion du footer -->
    @include('partials.footer')

    <!-- JS -->
    @vite(['resources/js/app.js'])
</body>
</html>