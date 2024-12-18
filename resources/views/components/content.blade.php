@props(['film' => null, 'type' => ''])
@php
    if ($type == 'homePage'){
        $class = 'flex flex-col items-start gap-4 self-stretch';
        $style = 'width: 35vw';
    }
    elseif ($type == 'genre'){
        $class = 'flex flex-col items-start gap-4 self-stretch mt-16';
    }
    else{
        $class = 'flex flex-col items-start gap-4 self-stretch mt-40';
    }
@endphp

<div class="{{ $class }}">
    <div class="flex flex-col items-start gap-4 self-stretch">
        <span class="text-[22px] font-light leading-10">{{ $film->releaseYear() }}</span>
        <span class="font-extrabold text-5xl">{{ $film->title }}</span>
        <span class="flex justify-center font-bold">5 Seasons • {{ $film->genres->pluck('name')->join(' • ') }}</span>
        <p class="overflow-hidden h-12" style="width: 40vw; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical">
            {{ $film->description }}
        </p>
    </div>
    <div class="flex gap-8">
        <x-button type="watch" url="{{ '/watch/' . $film->slug }}" >Play Now</x-button>
        <x-button type="trailer">Watch Trailer</x-button>
        <x-button type="wishlist">Add to Wishlist</x-button>
    </div>
</div>
