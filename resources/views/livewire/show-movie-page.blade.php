<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="bg-black">

        <div class="video-container">
            <video controls>
                <source src="path-to-your-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="flex w-full">

            <div class="w-7/10 ml-[170px] mt-[50px]">
                <div class="pb-2 text-3xl font-semibold font-poppins">
                    Linh Lung Công Chúa
                </div>
                <div class="pb-2">The Wolf Princess</div>
                <div class="rating">
                    <span class="star active">★</span>
                    <span class="text">Chưa có đánh giá</span>
                    <span class="stars">
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                    </span>
                </div>
                <div class="info-line pt-5">
                    <span class="status new">Mới</span>
                    <span class="separator">•</span>
                    <span>2021</span>
                    <span class="separator">•</span>
                    <span>T13</span>
                    <span class="separator">•</span>
                    <span>24/24 tập</span>
                    <span class="separator">•</span>
                    <span>Trung Quốc</span>
                </div>
                <div class="pt-2">
                    Bạo lực
                </div>
                <div class="pt-2">
                    Linh Lung Công Chúa lấy bối cảnh tại Nam Sở, ở dãy núi giao giữa hai nước Tây - Quyết có bộ lạc Lang
                    tộc sinh sống từ xa xưa. Phim kể về câu chuyện tình yêu lãng mạn, không đánh không quen biết giữa
                    công chúa Linh Lung, người mang trong mình hai linh hồn người và sói, với con trai Lang vương là
                    Viêm Thanh.
                </div>

            </div>
            <div class="w-3/10 mr-[170px] mt-[50px]" class="info-box">
                <div class="actions">
                    <span class="action text-white font-sans">
                        <img src="{{ Vite::asset('resources/images/movie-image/heart.png') }}" alt="" class="w-1/5 mr-2">Theo dõi
                    </span>
                    <span class="action text-white font-sans">
                        <img src="{{ Vite::asset('resources/images/movie-image/share.png') }}" alt="" class="w-1/5 mr-3"> Chia sẻ
                    </span>
                </div>
                <div class="details">
                    <p class="text-gray-400"><span class="label text-gray-400 font-sans">Diễn viên:</span> Cốc Gia Thành, Khang Ninh, Cao Cơ Tài</p>
                    <p class="text-gray-400"><span class="label text-gray-400 font-sans">Đạo diễn:</span> Cao Lâm Báo</p>
                    <p class="text-gray-400"><span class="label text-gray-400 font-sans">Thể loại:</span> Cổ trang, Tình cảm</p>
                </div>

            </div>
        </div>

        <x-series-slider :movies="$movies" />

        <div class="flex flex-col items-center gap-16 shrink-0 relative mx-[170px] mt-[50px]">
            <div class="flex flex-col justify-center mt-14 gap-9 self-stretch hover:opacity-100">
                <h2 class="font-bold text-3xl">Nội Dung Liên Quan</h2>
                <div class="swiper relative-movie-swiper w-full relative">
                    <div class="swiper-wrapper">
                        @foreach($movies as $movie)
                        <x-film-diff :movie="$movie" />
                        @endforeach
                    </div>
                </div>
                <div href="javascript:void(0);" id="relative-movie-swiper-button-prev"
                    class="swiper-button-prev rounded-full fade-box-left hover:opacity-100">
                </div>
                <div href="javascript:void(0);" id="relative-movie-swiper-button-next"
                    class="swiper-button-next rounded-full fade-box-right hover:opacity-100"></div>
            </div>
            <div class="flex justify-end items-end w-fit px-44 items-center absolute -right-4 -bottom-16">
            </div>
        </div>

        <div id="rounded-slider" class="mb-3 gap-9 mx-[170px]">
            <h2 class="mb-3 text-2xl font-bold pb-5 pt-7">Diễn viên</h2>

            <div class="flex flex-wrap">
                @foreach($movies as $movie)
                <div class="mr-5 mb-11">
                    <div>
                        <a>
                            <img src="{{ Vite::asset($movie->links)}}" alt="" class="w-52 h-52 rounded-full mb-5">
                        </a>
                    </div>
                    <h3>
                        <a href="#" class="pl-12">
                            Yoo Seung Ho
                        </a>
                    </h3>
                </div>
                @endforeach

            </div>
            <div class="swiper-button-next standing-button-next hidden swiper-button-disabled" role="button" aria-disabled="true"></div>
            <div class="swiper-button-prev standing-button-prev hidden swiper-button-disabled" role="button" aria-disabled="true"></div><span
                    class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>

        <div class="mx-[170px] w-full h-[400px]">
            <div class="flex w-full" style="    width: 100%;">
                <div class="w-3/10 text-3xl font-bold" style="    width: 40%;">
                    Bình luận (0)
                </div>
                <div class="flex justify-center w-7/10">
                    <div class="relative w-fit">
                        <!-- Dropdown Trigger -->
                        <div id="dropdownButtonOptionforComment" class="text-white px-4 py-2 rounded focus:outline-none text-lg font-semibold flex w-full">
                            <div>
                                Mới Nhất
                            </div>

                            <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </div>

                        <!-- Dropdown Menu -->
                        <div id="dropdownMenuOptionforComment" class="absolute right-0 mt-0 w-48 rounded shadow-lg hidden bg-gray-800">
                            <a href="#" class="block px-4 py-2 text-white">Option 1</a>
                            <a href="#" class="block px-4 py-2 text-white">Option 2</a>
                            <a href="#" class="block px-4 py-2 text-white">Option 3</a>
                        </div>
                    </div>
                </div>       

            </div>

            <div>
                Vui lòng <a href="#">Đăng nhập</a> tài khoản FPT Play để sử dụng Bình luận
            </div>
        </div>

    </div>
</div>
