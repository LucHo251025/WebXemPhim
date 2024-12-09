@props(['film' => null])
<div class="swiper-slide min-h-[104px]" style="background-image: url('{{ $film->backgrounds[0] }}'); background-color: lightgray; background-position: 50%; background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <div class="homeSlider flex flex-col items-start gap-2.5 shrink-0 h-full relative">
        <div class="shrink-0 self-stretch mt-auto absolute bottom-[25%] left-[10%] flex-grow flex flex-col justify-end">
            <x-content :film="$film" type="homePage"/>
        </div>
    </div>
</div>
