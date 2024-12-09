@props(['actors'=>null])

@foreach($actors as $actor)

    <div class="swiper-slide swiper-slide-actor">
        <div class="cart-item flex items-center gap-9 sm:gap-4">

                @php
                    $images = is_string($actor->images) ? json_decode($actor->images, true) : $actor->images;

                    if (!$images) {
                        // Nếu $images chỉ là chuỗi đơn (không phải JSON), chuyển thành mảng
                        $images = [$actor->images];
                    }
                    @endphp

                    <img class="w-[120px] h-[120px] md:w-[90px] md:h-[90px] sm:w-[70px] sm:h-[70px] rounded-full" src="{{ asset($images[0]) }}" alt="">
                <div class="flex w-[146px] sm:w-[100px] flex-col items-start gap-1">
                <h5 class="text-white font-poppins text-[19px] font-semibold leading-[120%] sm:text-[16px]">{{$actor->name}}</h5>
            </div>
        </div>
    </div>
@endforeach
