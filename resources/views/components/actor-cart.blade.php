@props(['actors'=>null]))

@foreach($actors as $actor)
    <div class="swiper-slide swiper-slide-actor">
        <div class="cart-item flex items-center gap-9">
            <img class="w-[120px] h-[120px]" style="border-radius: 120px;"
                 src="{{ asset('storage/' . $actors->image)  }}" alt="">
            <div class="flex w-[146px] flex-col items-start gap-1">
                <h5 class="items-stretch"
                    style="color:#FFF; font-family: Poppins; font-size: 19px; font-style: normal; font-weight: 600; line-height: 120%;">
                    {{$actor->name}}}</h5>
                <p class="self-stretch"
                   style="color: #C0A6FF; font-family: Poppins; font-size: 15px; font-style: normal; font-weight: 400; line-height: 120%;">
                    </p>
            </div>
        </div>
    </div>
@endforeach
