<div class="h-[904px] w-full mt-16"
     style="background: url({{ $currentFilm->backgrounds[0] }}) no-repeat; background-size: cover; ">
    <div class="h-full"
         style="background: var(--Grad-black, linear-gradient(89deg, #000 9.23%, rgba(0, 0, 0, 0.47) 49.67%, rgba(0, 0, 0, 0.00) 61.08%));">
        <div class="w-full h-full flex-col">
            <div class="h-full pl-36 pt-24 w-full flex flex-col justify-between">
                <div class="self-stretch flex flex-col h-fit mr-32">
                    <div class="self-start justify-start">
                        <h2 class="text-3xl font-bold">Explore Genres</h2>
                        <p>See Wide Range of genres you like</p>
                    </div>
                    <x-content type="genre" :film="$currentFilm"/>
                </div>
                <div class="swiper {{$name}}-swiper mb-9" style="width: 100%" wire:ignore>
                    <div class=" swiper-wrapper w-full" style="height: fit-content">
                        @foreach($genres as $genre)
                            <div wire:key="{{$genre->id}}" class="swiper-slide swiper-slide-most-watched"
                                 style="width: fit-content">
                                <div
                                    class="w-[269px] h-[147px] content-center flex justify-center items-center font-bold text-2xl"
                                    style="background: url({{ Vite::asset(json_decode($genre->images,true)) }}) lightgray 0px 0px / 100% 100% no-repeat; border-radius: 15px;">
                                    <div class="w-full h-full content-center flex justify-center items-center font-bold text-2xl"
                                        style="background: rgba(0, 0, 0, 0.5); border-radius: 15px;">
                                        <h3>{{ $genre->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-center items-center px-44 gap-6  w-full h-24 mt-16">
                        <x-swiper-button name="{{$name}}" type="prev"/>
                        <x-swiper-button name="{{$name}}" type="next"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



