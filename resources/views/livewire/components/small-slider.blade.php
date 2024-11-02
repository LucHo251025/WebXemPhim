<div class="flex flex-col items-center gap-16 shrink-0 relative">
    <div class="flex flex-col justify-center ml-24 mt-14 gap-9 self-stretch">
        <h2 class="font-bold text-3xl">Latest Releases</h2>
        <div class="swiper latest-swiper" style="width: 100%">
            <div class="swiper-wrapper">
                @foreach($movies as $movie)
                    <livewire:components.small-card :movie="$movie" :key="$movie->id"/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="flex justify-end items-end w-fit px-44 items-center absolute -right-4 -bottom-16">
        <button class="swiper-button-prev rounded-full" style="width: 80px;height: 80px;position: inherit; left: var(--swiper-navigation-sides-offset, 0px)"></button>
        <button class="swiper-button-next rounded-full" style="width: 80px;height: 80px;position: inherit; left: var(--swiper-navigation-sides-offset, 100px)"></button>
    </div>
</div>
