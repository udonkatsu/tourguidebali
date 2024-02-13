<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head Section -->
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Content Section -->
    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
</html>