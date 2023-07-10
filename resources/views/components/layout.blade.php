<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="icon" type="image/svg+xml" href="{{ Vite::image('vistron-solo.svg')}}" media="(prefers-color-scheme: dark)">--}}
{{--    <link rel="icon" type="image/svg+xml" href="{{ Vite::image('vistron-solo-white.svg')}}" media="(prefers-color-scheme: light)">--}}

    <title> {{ config('app.name')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        [x-cloak] { display: none !important; }
    </style>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles
</head>
<body style="font-family: 'poppins', sans-serif">

<x-nav />
<main>

    {{ $slot }}

</main>
@if(!isset($hideFooter) || $hideFooter === false)
    <x-footer />
@endif

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

@livewireScripts
@stack('scripts')
</body>
</html>
