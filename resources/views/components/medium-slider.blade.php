@props(['films' => null, 'name' => 'similarShows', 'title' => 'Title', 'nav' => false])
<div class="movie-card-play flex flex-col items-center gap-16 shrink-0 h-full">
    <div class="flex flex-col justify-center mt-14 gap-9 self-stretch {{ $name ==  'similarShows' ? '' : 'ml-24'}}">
        <p class="self-stretch text-white text-shadow-sm font-poppins text-[37px] font-semibold leading-[120%] md:text-[25px]">
            {{ $title }}
        </p>

        <div class="swiper w-full {{ $name }}-swiper card-items-play flex items-center gap-16">
            <div class="swiper-wrapper">
                <!-- Movie card loop -->
                @foreach($films as $film)
                    <x-movie-card :film="$film"></x-movie-card>
                @endforeach
            </div>
        </div>
    </div>
    @if($nav)
        <div class="flex justify-end items-end w-fit px-44 items-center gap-6 -right-4 -bottom-16 w-full h-24">
            <x-swiper-button name="{{$name}}" type="prev" />
            <x-swiper-button name="{{$name}}" type="next" />
        </div>
    @endif
</div>
