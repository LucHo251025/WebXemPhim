@props(['film' => null])
<div class="swiper-slide">
    <div class="w-[250px]">
        <a href="{{ '/film/' . $film->slug }}">
            <img class="w-[250px] h-[318px]" src="{{ $film->posters[0] }}" alt="{{ $film->title .'-poster' }}" style="border-radius: 0px 28px;">
            <h3 class="mt-5 text-2xl w-full overflow-hidden" style="-webkit-line-clamp: 1; display: -webkit-box;-webkit-box-orient: vertical;">{{ $film->title }}</h3>
            <p class="text-violet-400 text-sm w-full">{{ $film->genres->pluck('name')->join(' • ') }}</p>
        </a>
    </div>

</div>
