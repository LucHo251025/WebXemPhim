<header class="flex pt-12 px-24 items-start flex-col w-full fixed gap-2.5 z-10" style="   z-index: 9999999999999;" >
    <nav class="flex items-center gap-[75px] self-stretch mx-auto rounded-3xl " style="backdrop-filter: blur(7.5px);">
        <div>
            <a href="">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-14" alt="">
            </a>
        </div>
        <div class="font-bold text-xl flex items-center gap-16">
            <a href="/UpcomingMoves-page">Upcoming</a>
            <a href="/show-movie-page">Show</a>
            <a href="">Fanart</a>
            <a href="">Plans</a>
            <a href="">Community</a>
            <a href="/support-page">Account</a>
        </div>
        <div class="flex items-center gap-8">
            <img src="{{ Vite::asset('resources/images/search-interaction.svg') }}"
                 class="w-[50px]" alt="">
        </div>
    </nav>
</header>
