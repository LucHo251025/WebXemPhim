<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/swiper.js',  'resources/js/watch.js','resources/css/swiper.css'])
    @livewireStyles

</head>
<body class="bg-black text-white w-full" >
{{--    <x-header/>--}}
        <main class="">
            {{ $slot }}
        </main>

    @livewireScripts

</body>
</html>
