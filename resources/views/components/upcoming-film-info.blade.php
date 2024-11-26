<div class="flex m-2.5 w-[45%] items-center">
    <div class="w-[142px] h-[142px] rounded-full border-3 border-solid border-[#7300FF] bg-[#3000774D] flex justify-center items-center">
        <div class="w-[68px] h-[77px] text-4xl font-bold leading-[76.8px] text-center text-[#7300FF]">
            {{ $movie->release_day_upcoming }}
        </div>
    </div>
    <div class="ml-5">
        <img src="{{ Vite::asset($movie->links) }}" class="w-[134px] h-[125px] rounded-[29px]">
    </div>
    <div class="flex flex-col justify-center ml-5">
        <div class="text-2xl font-semibold leading-[34.8px] text-left">
            {{ $movie->title_upcoming }}
        </div>
        <div class="text-lg font-normal leading-[22.8px] text-left">
            Worldwide
        </div>
    </div>
</div>
