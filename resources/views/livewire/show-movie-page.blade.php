<div>
    {{-- Because she competes with no one, no one can compete with her. --}}


    <div style="background-color: black">

        <div class="video-container">
            <video controls>
                <source src="path-to-your-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div style="width:100%;display: flex">

            <div style="width:70%;margin-left: 170px;
    margin-top: 50px;">
                <div style="padding-bottom:10px;font-size: 33px;
    font-family: poppin, sans-serif;
    font-weight: 700;">
                    Linh Lung Công Chúa
                </div>
                <div style="padding-bottom:10px">The Wolf Princess
                </div>
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
                <div class="info-line" style="padding-top:20px">
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
                <div style="padding-top: 10px">
                    Bạo lực
                </div>
                <div style="padding-top: 10px">
                    Linh Lung Công Chúa lấy bối cảnh tại Nam Sở, ở dãy núi giao giữa hai nước Tây - Quyết có bộ lạc Lang
                    tộc sinh sống từ xa xưa. Phim kể về câu chuyện tình yêu lãng mạn, không đánh không quen biết giữa
                    công chúa Linh Lung, người mang trong mình hai linh hồn người và sói, với con trai Lang vương là
                    Viêm Thanh.
                </div>

            </div>
            <div style="width:30%;    margin-right: 170px;
                margin-top: 50px;" class="info-box">
                <div class="actions">
                    <span class="action" style=" color: #fff; /* Màu chữ trắng */
  font-family: Arial, sans-serif;">

                        <img src="{{ Vite::asset('resources/images/movie-image/heart.png') }}" alt=""
                            style="width:20%;    margin-right: 10px;">Theo dõi
                    </span>
                    <span class="action" style=" color: #fff; /* Màu chữ trắng */
  font-family: Arial, sans-serif;">
                        <img src="{{ Vite::asset('resources/images/movie-image/share.png') }}" alt=""
                            style="width:20%;    margin-right: 15px;"> Chia sẻ
                    </span>
                </div>
                <div class="details">
                    <p style="color: #d2d2d2; "><span class="label" style="     color: #d2d2d2; 
  font-family: Arial, sans-serif;">Diễn viên:</span> Cốc Gia Thành, Khang Ninh, Cao Cơ Tài</p>
                    <p style="color: #d2d2d2; "><span class="label" style="     color: #d2d2d2; 
  font-family: Arial, sans-serif;">Đạo diễn:</span> Cao Lâm Báo</p>
                    <p style="color: #d2d2d2; "><span class="label" style="     color: #d2d2d2; 
  font-family: Arial, sans-serif;">Thể loại:</span> Cổ trang, Tình cảm</p>
                </div>

            </div>
        </div>



        <x-series-slider :movies="$movies" />


        <div class="flex flex-col items-center gap-16 shrink-0 relative" style="    margin: 50px 170px 0px 170px;">
            <div class="flex flex-col justify-center mt-14 gap-9 self-stretch display-hover">
                <h2 class="font-bold text-3xl">Nội Dung Liên Quan</h2>
                <div class="swiper relative-movie-swiper" style="width: 100% ;     position: relative;">
                    <div class="swiper-wrapper">
                        @foreach($movies as $movie)
                        <x-film-diff :movie="$movie" />
                        @endforeach
                    </div>
                </div>
                <div href="javascript:void(0);" id="relative-movie-swiper-button-prev"
                    class="swiper-button-prev rounded-full fade-box-left display-hover">
                </div>
                <div href="javascript:void(0);" id="relative-movie-swiper-button-next"
                    class="swiper-button-next rounded-full fade-box-right display-hover" style=""></div>
            </div>
            <div class="flex justify-end items-end w-fit px-44 items-center absolute -right-4 -bottom-16">
            </div>
        </div>

        <div id="rounded-slider" class="mb-3 .gap-9" style=" margin: 50px 170px 0px 170px;">
            <h2 class="mb-3" style="font-size: 1.87rem;
    font-weight: 700;
    padding-bottom: 20px;
    padding-top: 29px;">Diễn viên</h2>
            
            
               
                <div style="display: flex; flex-wrap:wrap">
                    @foreach($movies as $movie)
                    <div style="margin-right:20px;    margin-bottom: 45px;">
                        <div>
                            <a>
                                <img src="{{ Vite::asset($movie->links)}}" alt="" style="     width: 210px;
    height: 210px;
    border-radius: 50%;
    margin-bottom: 20px;">
                            </a>
                        </div>
                        <h3>
                            <a href="" class="" id="" style="padding-left:50px">
                                Yoo Seung Ho
                            </a>
                        </h3>
                    </div>
                    @endforeach
                   
                 
                </div>
                <div data-v-75b6d2d6="" class="swiper-button-next standing-button-next d-none swiper-button-disabled"
                    tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
                <div data-v-75b6d2d6="" class="swiper-button-prev standing-button-prev d-none swiper-button-disabled"
                    tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div><span
                    class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
       
            <div style="margin: 50px 170px 0px 170px;width:100%;height:400px">
                <div style="display:flex;width:100%;">
                    <div style="width:30%   ;  font-size: 30px;
                        font-weight: 700;">
                        Bình luận (0)
                    </div>
                    <div class="items-center justify-center "style="width:70%">
                        <div class="relative " style="width: fit-content">
                            <!-- Dropdown Trigger -->
                            <div id="dropdownButtonOptionforComment" class=" text-white px-4 py-2 rounded focus:outline-none" style="font-size: 15px;
                            font-weight: 700; display:flex;width:100%">
                            <div>
                                Mới Nhất
                            </div>
                            
                            <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            </div>
                        
                            <!-- Dropdown Menu -->
                            <div id="dropdownMenuOptionforComment" class="absolute right-0 mt-0 w-48  rounded shadow-lg hidden" style="background-color:rgb(43, 45, 46)">
                            <a href="#" class="block px-4 py-2 text-white-700">Option 1</a>
                            <a href="#" class="block px-4 py-2 text-white-700 ">Option 2</a>
                            <a href="#" class="block px-4 py-2 text-white-700 ">Option 3</a>
                            </div>
                        </div>

                    </div>       

                </div>
                
                <div>
                    Vui lòng <a href="">Đăng nhập</a> tài khoản FPT Play để sử dụng Bình luận
                </div>
            </div>
            

    </div>















</div>