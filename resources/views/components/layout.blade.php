<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/app.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Raito</title>
        @livewireStyles
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/billsList">Bills List</a></li>
                <li><a href="/bills">Your Bill</a></li>
            </ul>
        </nav>
        {{ $slot }}
        @livewireScripts
    </body>
</html>