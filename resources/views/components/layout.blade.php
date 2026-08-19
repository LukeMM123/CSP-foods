<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="{{ $description ?? 'CSP Limited – premium wholesale fish, meat, poultry and game suppliers.' }}"
    >

    <title>{{ $title ?? 'CSP Limited' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white font-sans text-neutral-900 antialiased">

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>