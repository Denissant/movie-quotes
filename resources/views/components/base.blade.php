<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Quotes</title>
    <link rel="icon" href="{{ url('favicon.ico') }}">
    <link rel="icon" href="{{ url('icon-128.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="min-h-screen h-screen">
    {{ $slot }}

    <x-flash />
</body>
</html>

