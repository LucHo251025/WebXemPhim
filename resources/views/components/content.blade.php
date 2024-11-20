@props(['film' => null, 'type' => ''])
@php
    if ($type == 'homePage'){
        $class = 'flex flex-col items-start gap-4 self-stretch mt-40';
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
    <span class="text-[22px] font-light leading-10">{{ \Carbon\Carbon::parse($film->release_date)->format('Y') }}</span>
    <span class="font-extrabold text-5xl">{{ $film->title }}</span>
    <span class="flex justify-center font-bold">5 Seasons • {{ $film->genres->pluck('name')->join(' • ') }}</span>
    <p style="width: 40vw">
        {{ $film->description }}
    </p>
    <div class="flex gap-8">
        <x-button type="watch" >Play Now</x-button>
        <x-button type="trailer">Watch Trailer</x-button>
        <x-button type="wishlist">Add to Wishlist</x-button>
    </div>
</div>
