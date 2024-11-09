@props(['film' => null])
<div class="swiper-slide min-h-[104px]" style="background-image: url('{{ Vite::asset('resources/demo-images/img.png') }}'); background-color: lightgray; background-position: 50%; background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <div class="homeSlider flex flex-col items-start gap-2.5 shrink-0 h-full">
        <div class="shrink-0 self-stretch mt-auto mb-48 ml-32 flex-grow flex flex-col justify-end">
            <x-content :film="$film" />
        </div>
    </div>
</div>
