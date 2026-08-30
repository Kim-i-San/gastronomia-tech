<!DOCTYPE html>
<html
    lang="{{ app()->getLocale() }}"
    class="overflow-x-hidden"
>

<head>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}?v=2">
<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}?v=2">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Gastronomia Tech' }}</title>

    <meta
        name="description"
        content="{{ $description ?? 'Gastronomia Tech — Technology for gastronomy.' }}"
    >

    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700|instrument-serif:400,400i&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden bg-[#F4F0E9] font-sans text-[#181216] antialiased">
    {{ $slot }}
</body>
</html>