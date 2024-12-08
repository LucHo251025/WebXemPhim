@props(['movies' => null])
@foreach($movies as $movie)

<div class="swiper-slide">
    <div class="item-play flex w-[100%] flex-col items-start gap-9">
        @if ($movie->filmImages && !empty($movie->filmImages->posters))
            @php
                $posters = $movie->filmImages->posters; // Đây là mảng JSON
            @endphp

            {{-- Hiển thị hình ảnh đầu tiên nếu có --}}
            @if (!empty($posters))
                <img src="{{ asset('storage/' . $posters[0]) }}"
                     style="border-radius: 23px;background:100% 101.372% no-repeat;"
                     alt="{{ $movie->title }}">
            @endif
        @endif
        <div class="info-item flex w-[289px] flex-col items-start gap-2">
            <p class="self-stretch"
               style="color: #FFF;font-family: Poppins;font-size: 23px;font-style: normal;font-weight: 700;line-height: 120%;">
                Squid Game</p>
            <div class="flex items-center gap-2 self-stretch">
                <img src="{{ Vite::asset('resources\images\play_image\iconamoon_star-fill.svg') }}"
                     class="w-[29px] h-[29px]" alt="">
                <p class="w-[254px]"
                   style="color: #C0A6FF;font-family: Poppins;font-size: 23px;font-style: normal;font-weight: 700;line-height: 120%;">
                    {{$movie->rating}} | {{$movie->title}}
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach
