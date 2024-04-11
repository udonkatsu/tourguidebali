<?php
$pakets = [
    'one-day-trip-western' => getPaketData('one-day-trip-western'),
    'One-Day-Tour-west-Nusa-Penida' => getPaketData('One-Day-Tour-west-Nusa-Penida'),
    'One-Day-East-Tour-Nusa-Penida' => getPaketData('One-Day-East-Tour-Nusa-Penida'),
    'Combination-Nusa-Penida-Tour' => getPaketData('Combination-Nusa-Penida-Tour'),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel App' }}</title>
</head>

<body>
    <header>
        @include('layouts.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.footer')
    </footer>
</body>

</html>