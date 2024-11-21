<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/swiper.js', 'resources/css/swiper.css','resources/js/watch.js'])
</head>
<body class="bg-black-theme text-white w-full" >
{{--    <x-header/>--}}
        <main>
            {{ $slot }}
        </main>
{{--    <x-footer/>--}}

</body>
</html>
