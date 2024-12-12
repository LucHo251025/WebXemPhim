@props(['film' => null])
<div class="swiper-slide" style="width: fit-content">
    <div class="item-play flex flex-col items-start gap-4 sm:gap-6 md:gap-9 w-full">
        <a href="{{ '/watch/' . $film->slug }}">
            <img src="{{ $film->backgrounds[0] }}"
                 class="w-full max-w-[150px] md:max-w-[200px] lg:max-w-[250px] h-auto rounded-[23px] bg-cover"
                 alt="{{ $film->title }}">

            <div class="info-item flex flex-col items-start gap-1 sm:gap-2 w-full">
                {{-- Tiêu đề bộ phim --}}
                <p class="text-white font-poppins text-[18px]  sm:text-[12px] md:text-[15px] font-bold leading-[120%]">
                    {{ $film->title ?? 'No Title' }}
                </p>

                {{-- Đánh giá và tên bộ phim --}}
                <div class="flex items-center gap-2 w-full">
                    <img src="{{ Vite::asset('resources/images/play_image/iconamoon_star-fill.svg') }}"
                         class="w-[20px] sm:w-[10px] md:w-[13px] h-auto" alt="Star Icon">
                    <p class="text-[#C0A6FF] font-poppins text-[16px] sm:text-[10px] md:text-[13px] font-bold leading-[120%]">
                        {{ $film->average_rating ?? 'N/A' }} | {{ $film->genres->pluck('name')->join(' • ') }}
                    </p>
                </div>
            </div>
        </a>
    </div>
</div>

