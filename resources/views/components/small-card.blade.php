@props(['film' => null])
<div class="swiper-slide">
    <a href="#">

        <img class="w-[267px] h-[318px]" src="{{ Vite::asset(json_decode($film->images,true)['poster'][0]) }}" alt="{{ $film->title }}">
        <h3 class="mt-5 text-2xl">{{ $film->title }}</h3>
        <p class="text-violet-400 text-sm">{{ $film->genres->pluck('name')->join(' • ') }}</p>
    </a>
</div>
