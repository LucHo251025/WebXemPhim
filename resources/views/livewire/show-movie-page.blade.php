<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="mx-auto lg:max-w-[960px] min-[1280px]:max-w-[1180px] min-[1600px]:max-w-[70%] mt-10">

        <div class="video-container aspect-video relative w-full h-auto mb-7">
            <video class="w-full h-full object-cover m-0" controls style="transform: none; border: none; border-radius: 0">
                <source src="https://share.nplayervn.workers.dev/0:/08.%20J2TEAM%20MOVIE/Bumblebee/Bumblebee .mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>


        <div>
            <div class="relative mt-0 mb-6">
                <div class="flex flex-wrap">
                    <div
                        class="p-0 lg:max-w-[58.33333333%] lg:flex-[0_0_58.33333333%] md:max-w-full md:flex-[0_0_100%] sm:max-w-full sm:flex-[0_0_100%]">
                        {{-- title --}}
                        <div>
                            <h1 class="text-2xl text-white font-semibold">
                                Hồi Sinh Thế Giới (Phần 1)
                            </h1>
                            <h2 class="mb-3 text-gray-400 font-semibold">
                                Dr. Stone (Season 1)
                            </h2>
                        </div>
                        {{-- rating --}}
                        <div class="flex items-center flex-wrap gap-4 mb-3 min-[1650px]:gap-3">
                            <div class="flex items-center ">
                                <div
                                    style="background-color: rgb(44, 44, 44); padding: 2px 8px; background-position: center; background-repeat: no-repeat; background-size: cover; white-space: nowrap;"
                                    class="w-fit flex h-8 items-center rounded-lg">
                                    <img class="mr-2" src=" {{ Vite::asset('resources/images/rate-star.png') }}"
                                         alt="icon">
                                    <span
                                        class="text-white font-semibold leading-[150%] mr-1 min-[1650px]:text-[16px] text-[18px]">{{ $averageRating }}</span>
                                    <span style="color: #616161"
                                          class="font-semibold leading-[150%] mr-1 min-[1650px]:text-[14px] text-[16px]">({{ $totalReviews }})</span>
                                </div>
                            </div>
                                <div class="flex">
                                    <!-- Rating star -->
                                    <div class="flex items-center gap-1 {{ $rating == 0 ? '' : 'hidden'}}" id="rating-container">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <div class="item relative" data-value="{{ $i }}">
                                                <img
                                                    src="{{ ($i <= $rating) ? Vite::asset('resources/images/rate-star.png') : Vite::asset('resources/images/non-rate-star.png') }}"
                                                    data-active-src="{{ Vite::asset('resources/images/rate-star.png') }}"
                                                    data-inactive-src="{{ Vite::asset('resources/images/non-rate-star.png') }}"
                                                    class="cursor-pointer transition-all duration-200 rating-star"
                                                    wire:click="selectRating({{ $i }})"
                                                    alt="star">
                                            </div>
                                        @endfor
                                    </div>

                                    <div class="flex items-center w-fit h-8 hidden change-display">
                                        <div class="h-1 w-1 rounded-[50%] mt-0 mx-3"
                                             style="background: rgba(255,255,255,.38)"></div>
                                        <span id="cancelRating-button" class="cursor-pointer text-red-500 font-medium
                                         text-[14px] flex items-center justify-center leading-4 h-8 py-0 px-1.5 ">Cancel</span>
                                    </div>

                                </div>
                                {{--Show rating history and change button--}}
                                <div class="flex items-center w-fit h-8 rating-display {{ $rating == 0 ? 'hidden' : ''}}">
                                    <img class="mr-2" src=" {{ Vite::asset('resources/images/rate-star.png') }}" alt="icon">
                                    <span>{{ $rating }}</span>
                                    <div class="h-1 w-1 rounded-[50%] mt-0 mx-3"
                                         style="background: rgba(255,255,255,.38)"></div>
                                    <span id="changeRating-button" class="cursor-pointer text-red-500 font-medium
                                     text-[14px] flex items-center justify-center leading-4 h-8 py-0 px-1.5 ">Change</span>
                                </div>


                        </div>
                        {{-- information --}}
                        <div class="mb-3 items-center flex ">
                            <div class="items-center flex ">
                                <div class="font-normal text-[14px] leading-4" style="color: rgba(255,255,255,.87)">
                                    2019
                                </div>
                                <div class="h-[3px] w-[3px] rounded-[50%] mt-0 mx-3"
                                     style="background: rgba(255,255,255,.38)"></div>
                            </div>
                            <div class="items-center flex ">
                                <div class="font-normal text-[14px] leading-4" style="color: rgba(255,255,255,.87)">
                                    T16
                                </div>
                                <div class="h-[3px] w-[3px] rounded-[50%] mt-0 mx-3"
                                     style="background: rgba(255,255,255,.38)"></div>
                            </div>
                            <div class="items-center flex ">
                                <div class="font-normal text-[14px] leading-4" style="color: rgba(255,255,255,.87)">
                                    24/24 tập
                                </div>
                                <div class="h-[3px] w-[3px] rounded-[50%] mt-0 mx-3"
                                     style="background: rgba(255,255,255,.38)"></div>
                            </div>
                            <div class="items-center flex ">
                                <div class="font-normal text-[14px] leading-4" style="color: rgba(255,255,255,.87)">Nhật
                                    Bản
                                </div>
                            </div>
                        </div>
                        {{-- genre --}}
                        <div class="items-center flex mb-2">
                            <span class="leading-[150%] font-normal text-[14px]" style="color: rgba(255,255,255,.87)">Bạo lực, khỏa thân, chất gây nghiện, hành vi nguy hiểm, dễ bắt chước</span>
                        </div>
                        <div class="relative text-xs leading-5 mb-3 " style="color: #d2d2d2">
                            <p class="overflow-hidden text-justify" style="text-overflow: inherit;display: -webkit-box; line-clamp: 3; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">Phim lấy bối cảnh tương lai, một tia sáng kì dị xuất hiện trên
                                địa cầu khiến toàn bộ loài người hóa thành đá. Mấy ngàn năm cứ thế trôi qua cho đến khi
                                cậu thiếu niên Senku phá đá thức tỉnh. Khi nhìn thấy trước mắt mình là những pho tượng
                                lạnh lẽo, cậu cùng với Taiju đã bắt đầu đại nghiệp giải cứu nhân loại đầy gian nan.</p>
                            <div>
                                <div class="absolute right-0 font-medium text-[14px] leading-4 read-more-open text-white transition bottom-0.5  bg-black-theme">...More</div>
                                <div class="absolute right-0 font-medium text-[14px] leading-4 read-more-close bg-black-theme" style="color: #616161">Hide</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-1 px-4"></div>
                    <div class="text-white p-0 sm:max-w-full sm:flex-[0_0_100%] md:flex-[0_0_100%] md:max-w-full lg:flex-[0_0_33.33333333%] lg:max-w-[33.33333333%] ">
                        <div class="text-xs leading-5 mb-4 flex flex-wrap" style="color: #d2d2d2">
                            <button class="mr-8 p-0 font-medium text-[14px] border-none flex flex-wrap text-white text-center align-middle leading-[1.35]" style="background: none; box-shadow: none">
                                <img src="{{ Vite::asset('/resources/images/heart.png') }}">
                                <span class="ml-2 font-medium text-[14px] text-white pt-1">Follow</span>
                            </button>
                            <button class="p-0 font-medium text-[14px] border-none flex flex-wrap text-white text-center align-middle leading-[1.35]" style="background: none; box-shadow: none">
                                <img class="pt-1" src="{{ Vite::asset('/resources/images/share.png') }}" lazy="loaded">
                                <span class="ml-2 font-medium text-[14px] text-white pt-1">Share</span>
                            </button>
                        </div>
                        <div class="flex flex-wrap ">
                            <div class="w-1/4 font-light text-[14px] leading-[17px] py-1" style="color: #d2d2d2">Actors:</div>
                            <div class="w-3/4 font-light text-[14px] leading-[17px] py-1">Ryota Suzuki, Saki Miyashita, Karin Nanami, Saori Hayami</div>
                            <div class="w-1/4 font-light text-[14px] leading-[17px] py-1" style="color: #d2d2d2">Genres:</div>
                            <div class="w-3/4 font-light text-[14px] leading-[17px] py-1">Action, abc, a</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

                <x-series-slider :films="$films" />

{{--        <div class="flex flex-col items-center gap-16 shrink-0 relative mx-[170px] mt-[50px]">--}}
{{--            <div class="flex flex-col justify-center mt-14 gap-9 self-stretch hover:opacity-100">--}}
{{--                <h2 class="font-bold text-3xl">Nội Dung Liên Quan</h2>--}}
{{--                <div class="swiper relative-movie-swiper w-full relative">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        @foreach($movies as $movie)--}}
{{--                            --}}{{--                        <x-film-diff :movie="$movie" />--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div href="javascript:void(0);" id="relative-movie-swiper-button-prev"--}}
{{--                     class="swiper-button-prev rounded-full fade-box-left hover:opacity-100">--}}
{{--                </div>--}}
{{--                <div href="javascript:void(0);" id="relative-movie-swiper-button-next"--}}
{{--                     class="swiper-button-next rounded-full fade-box-right hover:opacity-100"></div>--}}
{{--            </div>--}}
{{--            <div class="flex justify-end items-end w-fit px-44 items-center absolute -right-4 -bottom-16">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="rounded-slider" class="mb-3 gap-9 mx-[170px]">--}}
{{--            <h2 class="mb-3 text-2xl font-bold pb-5 pt-7">Diễn viên</h2>--}}

{{--            <div class="flex flex-wrap">--}}
{{--                @foreach($movies as $movie)--}}
{{--                    <div class="mr-5 mb-11">--}}
{{--                        <div>--}}
{{--                            <a>--}}
{{--                                <img src="{{ Vite::asset($movie->links)}}" alt="" class="w-52 h-52 rounded-full mb-5">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="#" class="pl-12">--}}
{{--                                Yoo Seung Ho--}}
{{--                            </a>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--            <div class="swiper-button-next standing-button-next hidden swiper-button-disabled" role="button"--}}
{{--                 aria-disabled="true"></div>--}}
{{--            <div class="swiper-button-prev standing-button-prev hidden swiper-button-disabled" role="button"--}}
{{--                 aria-disabled="true"></div>--}}
{{--            <span--}}
{{--                class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>--}}
{{--        </div>--}}

{{--        <div class="mx-[170px] w-full h-[400px]">--}}
{{--            <div class="flex w-full" style="    width: 100%;">--}}
{{--                <div class="w-3/10 text-3xl font-bold" style="    width: 40%;">--}}
{{--                    Bình luận (0)--}}
{{--                </div>--}}
{{--                <div class="flex justify-center w-7/10">--}}
{{--                    <div class="relative w-fit">--}}
{{--                        <!-- Dropdown Trigger -->--}}
{{--                        <div id="dropdownButtonOptionforComment"--}}
{{--                             class="text-white px-4 py-2 rounded focus:outline-none text-lg font-semibold flex w-full">--}}
{{--                            <div>--}}
{{--                                Mới Nhất--}}
{{--                            </div>--}}

{{--                            <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"--}}
{{--                                 aria-hidden="true">--}}
{{--                                <path fill-rule="evenodd"--}}
{{--                                      d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"--}}
{{--                                      clip-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </div>--}}

{{--                        <!-- Dropdown Menu -->--}}
{{--                        <div id="dropdownMenuOptionforComment"--}}
{{--                             class="absolute right-0 mt-0 w-48 rounded shadow-lg hidden bg-black-800">--}}
{{--                            <a href="#" class="block px-4 py-2 text-white">Nhiều like nhất</a>--}}
{{--                            <a href="#" class="block px-4 py-2 text-white">Mới nhất</a>--}}
{{--                            <a href="#" class="block px-4 py-2 text-white">Cũ nhất</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div>--}}
{{--                Vui lòng <a href="#">Đăng nhập</a> tài khoản FPT Play để sử dụng Bình luận--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</div>
