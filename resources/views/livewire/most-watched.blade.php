<div class="h-[904px] w-full mt-16"
     style="background: url({{  $currentFilm->backgrounds[0] }}) no-repeat; background-size: cover; ">
    <div class="h-full"
         style="background: var(--Grad-black, linear-gradient(89deg, #000 9.23%, rgba(0, 0, 0, 0.47) 49.67%, rgba(0, 0, 0, 0.00) 61.08%));">
        <div class="w-full h-full flex-col">
            <div class="h-full pl-36 pt-52 w-full" style=" display: flex; flex-direction: row">
                <div class="self-stretch flex flex-col h-fit mr-32">
                    <div class="self-start justify-start">
                        <h2 class="text-3xl font-bold" >This month's most watched</h2>
                        <p>Watch this month's most Watched Shows</p>
                    </div>
                    <x-content :film="$currentFilm" />
                </div>
                <div class="swiper {{$name}}-swiper " style="width: 100%" wire:ignore>
                    <div class=" swiper-wrapper w-full " style="height: fit-content">
                        @foreach($films as $film)
                            <div wire:key="{{$film->id}}" class="swiper-slide swiper-slide-most-watched" style="width: fit-content" >
                                <div class="w-[377px] h-[482px]"
                                     style="background: url({{ $film->posters[0] }}) lightgray 0px -21px / 100% 106.846% no-repeat;border: 5px solid var(--Primary, #7300FF); border-radius: 0px 35px;"></div>
                            </div>
                        @endforeach
                    </div>
                    <div  class="flex justify-end items-end  px-44 gap-6 -right-4 -bottom-16 w-full h-24 mt-16">
                        <x-swiper-button name="{{$name}}" type="prev" />
                        <x-swiper-button name="{{$name}}" type="next"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



