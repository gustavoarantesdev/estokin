<!DOCTYPE html>
<html lang=pt-BR">

<head>
    <meta chartset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />

    <title>Estokin</title>

    <link
        type="image/x-icon"
        href="{{ asset('img/favicon.svg') }}"
        rel="shortcut icon"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    @yield('content')
</body>
