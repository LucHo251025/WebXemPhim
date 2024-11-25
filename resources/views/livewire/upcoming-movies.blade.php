<div class="bg-black text-white">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="h-[865px] bg-cover" style="background-image: url({{ Vite::asset('resources/images/upcoming_image/movies-main.jpg') }})">
        <div class="h-full bg-gradient-to-t from-black via-black/70 to-transparent">
            <div class="h-full flex mx-[120px]">
                <div class="flex justify-end items-end flex-1">
                    <div class="flex-1">
                        <div class="flex flex-col items-start p-0 font-poppins text-4xl font-bold leading-[55.2px] text-left">
                            Get Ready for Action: Upcoming Blockbusters You Can't Miss!
                        </div>
                        <div class="flex flex-col items-start font-poppins text-lg leading-7 text-left pt-2">
                            Prepare for an adrenaline-packed season with our upcoming blockbusters! From thrilling action
                            sequences to heart-pounding adventures, these movies will keep you on the edge of your seat.
                            Mark your calendars for an unforgettable cinematic experience!
                        </div>
                    </div>

                    <div class="flex justify-center items-center flex-1">
                        <div class="h-[119px] w-full flex justify-end mt-[70px]">
                            <div class="w-[151px] py-[10px] px-[22px] gap-2 border-2 border-white rounded-tr-[16px] rounded-br-[16px] bg-[#3000774D] ml-[33px] mt-[70px]">
                                <div class="flex items-center justify-center font-poppins text-sm font-semibold leading-5">
                                    Movies
                                    <div class="w-[17px] h-[11px] ml-2">
                                        <img src="{{ Vite::asset('resources/images/upcoming_image/Vector 3.png') }}" alt="Icon" />
                                    </div>
                                </div>
                            </div>

                            <div class="w-[151px] py-[10px] px-[22px] gap-2 border-2 border-white rounded-tr-[16px] rounded-br-[16px] bg-[#3000774D] ml-[33px] mt-[70px]">
                                <div class="flex items-center justify-center font-poppins text-sm font-semibold leading-5">
                                    2024
                                    <div class="w-[17px] h-[11px] ml-2">
                                        <img src="{{ Vite::asset('resources/images/upcoming_image/Vector 3.png') }}" alt="Icon" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-[120px] mt-12 bg-black">
        <div class="font-poppins text-2xl font-semibold leading-[34.8px]">
            Upcoming Movies
        </div>

        <?php foreach ($groupedMovies as $year_month => $movies) { ?>
            <x-upcoming-month :item="['year_month' => $year_month, 'movies' => $movies]" />
        <?php } ?>

        <div class="mt-8 pb-8">
            <div class="flex justify-center">
                <div class="w-[151px] py-[10px] px-[22px] gap-2 border-2 border-white rounded-tr-[16px] rounded-br-[16px] bg-[#3000774D]">
                    <div class="flex items-center justify-center font-poppins text-sm font-semibold leading-5">
                        Show more
                        <div class="w-[17px] h-[11px] ml-2">
                            <img src="{{ Vite::asset('resources/images/upcoming_image/Vector 3.png') }}" alt="Icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>