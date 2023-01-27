<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'DM Sans', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-50">
        <x-navigation/>
        <div class="flex-col h-full">
            <div class="px-5">
                {{ $slot }}
            </div>
            <x-footer/>
        </div>
    </body>
</html>
