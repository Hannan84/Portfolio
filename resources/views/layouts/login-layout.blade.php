<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Portfolio') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased min-h-screen">
<div class="grid grid-cols-1 md:grid-cols-2 h-screen">

    <!-- Left side (login form slot) -->
    <div class="flex items-center justify-center h-full bg-slate-900 login-image ">
        <div class="w-full max-w-md">
            {{ $slot }}
        </div>
    </div>

    <!-- Right side (illustration / image) -->
    <div class="hidden md:flex items-center justify-center h-full bg-gray-100">
        <img src="{{ Vite::asset('resources/images/illustration.jpg') }}"
             alt="Illustration"
             class="w-3/4 h-auto">
    </div>
</div>
</body>
</html>
