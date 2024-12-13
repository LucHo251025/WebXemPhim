<header class="flex pt-12 px-24 items-start flex-col w-full fixed gap-2.5 z-10" style="   z-index: 9999999999999;" >
    <nav class="items-center gap-[75px] self-stretch mx-auto rounded-3xl hidden lg:flex" style="backdrop-filter: blur(7.5px);">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-14" alt="">
            </a>
        </div>
        <div class="font-bold text-xl flex items-center gap-16">
            <a href="/UpcomingMoves-page">Upcoming</a>
            <a href="/explore/movie">Explore Movie</a>
            <a href="/explore/film">Explore Film</a>
            <a href="/subscription-page">Subscription</a>
            <a href="/profile-page">Account</a>
            @auth
                <a href="/profile-page/{{Auth::user()->id}}" >Profile</a>
            @endauth

            <!-- Check if the user is a guest (not logged in) -->
            @guest
                <a href="/login">Login</a>
            @endguest
        </div>
        <div class="flex items-center gap-8">
            <img src="{{ Vite::asset('resources/images/search-interaction.svg') }}"
                 class="w-[50px]" alt="">
        </div>
    </nav>
    <nav class="lg:hidden w-full flex" style="backdrop-filter: blur(7.5px);">
        <div class="title flex">
            <p
                style="color:#7300FF;font-family: BlackChancery;font-size: 60px;font-style: normal;font-weight: 5;line-height: 57px;text-transform: capitalize;">C<p
                style="color: #FFF;font-family: BlackChancery;font-size: 32px;font-style: normal;font-weight: 5;line-height: 57px;text-transform: capitalize;">ine</p>
                    <p
                style="color: #FFF;font-family: BlackChancery;font-size: 40px;font-style: normal;font-weight: 5;line-height: 57px;text-transform: capitalize;">S</p> <p
                style="color: #FFF;font-family: BlackChancery;font-size: 32px;font-style: normal;font-weight: 5;line-height: 57px;text-transform: capitalize;">phere</p>
            </p>
        </div>
        <div class="flex-1">
        </div>
        <div class="flex items-center gap-8">
            <button class="text-xl" onClick="document.getElementById('mobile-menu').classList.toggle('hidden');">☰</button>
        </div>
    </nav>
    <div id="mobile-menu" class="lg:hidden  flex-col items-center mt-4   p-6 rounded-lg shadow-lg transition-transform transform scale-95 flex w-full opacity-90  text-xl font-bold text-white" style=" background: #1c1c1c9e;">
        <a href="/UpcomingMoves-page" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Upcoming</a>
        <a href="/show-movie-page" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Show</a>
        <a href="" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Fanart</a>
        <a href="" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Plans</a>
        <a href="" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Community</a>
        <a href="/support-page" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Account</a>
        @auth
            <a href="/profile-page/{{Auth::user()->id}}" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Profile</a>
        @endauth

        <!-- Check if the user is a guest (not logged in) -->
        @guest
            <a href="/login" class="w-full text-center py-3 px-6 mb-3 hover:bg-gray-700 rounded-md">Login</a>
        @endguest

    </div>

</header>

