@props(['movies' => null])
@foreach($movies as $movies)
<div class="swiper-slide">
    <div class="item-play flex w-[100%] flex-col items-start gap-9">
        <img src="{{ Vite::asset(json_decode($movies->images)) }}"
             style="border-radius: 23px;background:100% 101.372% no-repeat;"
             alt="">
        <div class="info-item flex w-[289px] flex-col items-start gap-2">
            <p class="self-stretch"
               style="color: #FFF;font-family: Poppins;font-size: 23px;font-style: normal;font-weight: 700;line-height: 120%;">
                Squid Game</p>
            <div class="flex items-center gap-2 self-stretch">
                <img src="{{ Vite::asset('resources\images\play_image\iconamoon_star-fill.svg') }}"
                     class="w-[29px] h-[29px]" alt="">
                <p class="w-[254px]"
                   style="color: #C0A6FF;font-family: Poppins;font-size: 23px;font-style: normal;font-weight: 700;line-height: 120%;">
                    {{$movies->rating}} | {{$movies->title}}
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach
