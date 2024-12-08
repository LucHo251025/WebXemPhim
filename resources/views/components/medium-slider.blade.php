@props(['films' => null, 'name' => 'similarShows'])
<div class="swiper w-full {{ $name }}-swiper card-items-play flex items-center gap-16">
    <div class="swiper-wrapper">
        <!-- Movie card loop -->
        @foreach($films as $film)
            <x-movie-card :film="$film"></x-movie-card>
        @endforeach
    </div>
</div>
