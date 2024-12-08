@props(['movies' => null])

@foreach($movies as $movie)
    <div class="swiper-slide">
        <div class="item-play flex flex-col items-start gap-4 sm:gap-6 md:gap-9 w-full">
            {{-- Hiển thị hình ảnh nếu có --}}
            @if ($movie->filmImages && !empty($movie->filmImages->posters))
                @php
                    $posters = is_string($movie->filmImages->posters) ? json_decode($movie->filmImages->posters, true) : $movie->filmImages->posters;
                @endphp

                @if (!empty($posters) && isset($posters[0]))
                    <img src="{{ asset('storage/' . $posters[0]) }}"
                         class="w-full max-w-[150px] md:max-w-[200px] lg:max-w-[250px] h-auto rounded-[23px] bg-cover"
                         alt="{{ $movie->title }}">
                @endif
            @endif

            <div class="info-item flex flex-col items-start gap-1 sm:gap-2 w-full">
                {{-- Tiêu đề bộ phim --}}
                <p class="text-white font-poppins text-[18px]  sm:text-[12px] md:text-[15px] font-bold leading-[120%]">
                    {{ $movie->title ?? 'No Title' }}
                </p>

                {{-- Đánh giá và tên bộ phim --}}
                <div class="flex items-center gap-2 w-full">
                    <img src="{{ Vite::asset('resources/images/play_image/iconamoon_star-fill.svg') }}"
                         class="w-[20px] sm:w-[10px] md:w-[13px] h-auto" alt="Star Icon">
                    <p class="text-[#C0A6FF] font-poppins text-[16px] sm:text-[10px] md:text-[13px] font-bold leading-[120%]">
                        {{ $movie->rating ?? 'N/A' }} | {{ $movie->title ?? 'No Title' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
