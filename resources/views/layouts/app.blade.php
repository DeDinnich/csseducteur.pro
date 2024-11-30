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
    <!-- Cercles flous -->
    <div class="blur-circles">
        @for ($i = 0; $i < rand(4, 6); $i++)
            <div class="blur-circle" style="
                top: {{ rand(0, 90) }}%;
                left: {{ rand(0, 90) }}%;
                animation-delay: {{ rand(0, 5) }}s;
            "></div>
        @endfor
    </div>

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