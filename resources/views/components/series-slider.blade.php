<div class="flex flex-col items-center gap-16 shrink-0 relative mb-12 " wire:ignore>
    <div class="flex flex-col justify-center gap-2 self-stretch display-hover">
        <h2 class="font-medium text-[1.53125rem]">Danh sách</h2>
        <div class="swiper series-movie-swiper" style="width: 100%; position: relative;">
            <div class="swiper-wrapper">
{{--                @php--}}
{{--                $espisodes = $films->first()->seasons()->first()->episodes;--}}
{{--                @endphp--}}
                @foreach($films->first()->seasons()->first()->episodes as $episode)
                    <x-series-card :episode="$episode" />
                @endforeach
            </div>
        </div>


        <div class="swiper-button-next w-[6%]" id="series-movie-swiper-button-prev" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false" style="height: 133.5px; opacity: 0; visibility: visible;"></div>
    </div>
    <div class="flex justify-end items-end w-fit px-44 items-center absolute -right-4 -bottom-16">
    </div>
</div>
