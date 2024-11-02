<div class="shrink-0 relative swiper home-swiper">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide min-h-[104px]" style="background-image: url('{{ Vite::asset('resources/demo-images/img.png') }}'); background-color: lightgray; background-position: 50%; background-size: cover; background-repeat: no-repeat; height: 100vh;">
            <div class="homeSlider flex flex-col items-start gap-2.5 shrink-0 h-full">
                <div class="shrink-0 self-stretch mt-auto mb-48 ml-32 flex-grow flex flex-col justify-end">
                    <div class="flex flex-col items-start gap-4 w-1/2">
                        <div class="flex flex-col items-start gap-6 self-stretch">
                            <span class="text-[22px] font-light leading-10">2022</span>
                            <span class="font-extrabold text-5xl">The Batman</span>
                            <span class="flex justify-center">2 hr 56 min • Action • Drama</span>
                            <p class="w-[757px]">
                                Batman is called to intervene when the mayor of Gotham City is murdered.
                                Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.
                            </p>
                        </div>
                        <div class="flex items-center gap-8">
                            <button class="flex px-3 py-2.5 justify-center items-center w-[151px] h-[44px] rounded-lg" style="background: var(--Primary, #7300FF);">Play Now</button>
                            <button class="flex px-3 py-2.5 justify-center items-center w-[151px] h-[44px] border border-white rounded-lg">Watch Trailer</button>
                            <button class="bg-white text-black px-8 py-3 rounded-lg">Add To Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide min-h-[104px]" style="background-image: url('https://placeholder.pics/svg/1920x904/999'); background-color: lightgray; background-position: 50%; background-size: cover; background-repeat: no-repeat; height: 100vh;">
            <div class="flex flex-col items-start gap-2.5 shrink-0 h-full">
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="swiper-pagination swiper-pagination-home mb-12"></div>
</div>
