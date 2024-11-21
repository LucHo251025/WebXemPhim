<div class="flex flex-col items-center gap-16 shrink-0 relative" style="    margin: 50px 170px 0px 170px;">
    <div class="flex flex-col justify-center mt-14 gap-9 self-stretch display-hover">
        <h2 class="font-bold text-3xl">Danh sách</h2>
        <div class="swiper series-movie-swiper" style="width: 100% ;     position: relative;">
            <div class="swiper-wrapper">
                @foreach($movies as $movie)
                <x-series-card :movie="$movie" />
                @endforeach
            </div>
        </div>
        <div href="javascript:void(0);" id="series-movie-swiper-button-prev" class="swiper-button-prev rounded-full fade-box-left display-hover">
        </div>
        <div href="javascript:void(0);" id="series-movie-swiper-button-next" class="swiper-button-next rounded-full fade-box-right display-hover"
            style=""></div>
    </div>
    <div class="flex justify-end items-end w-fit px-44 items-center absolute -right-4 -bottom-16">
    </div>
</div>