@props(['films', 'title', 'name' => 'latest'])
{{--get latest film--}}
@php($films = \App\Models\Film::latest()->limit(12)->get())
<div class="flex flex-col items-center gap-16 shrink-0 h-full">
    <div class="flex flex-col justify-center ml-24 mt-14 gap-9 self-stretch">
        <h2 class="font-bold text-3xl">{{ $title ?? 'Title' }}</h2>
        <div class="swiper {{$name}}-swiper" style="width: 100%">
            <div class="swiper-wrapper ">
                @foreach($films as $film)
                    <x-small-card :film="$film" />
                @endforeach
            </div>
        </div>
    </div>
    <div class="flex justify-end items-end w-fit px-44 items-center gap-6 -right-4 -bottom-16 w-full h-24">
        <x-swiper-button name="{{$name}}" type="prev" />
        <x-swiper-button name="{{$name}}" type="next" />
    </div>
</div>
