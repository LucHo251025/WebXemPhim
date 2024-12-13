@props(['url' => '#', 'type' => null])
@php
    if ($type == 'trailer') {
        $style = 'background: var(--Glass, rgba(89, 77, 91, 0.20));border-radius: 0px 16px;';
        $class = 'flex px-[22px] py-2.5 justify-center items-center h-11 font-bold rounded-lg gap-2.5 flex flex-wrap sm:px-4 sm:py-2 max-sm:h-10 max-sm:text-sm
         md:px-6 md:py-3 md:h-12 md:text-lg';
        $image = 'resources/images/play.svg';
    } elseif ($type == 'wishlist') {
        $style = 'border-radius: 0px 16px; border: 1px solid var(--White, #FFF); background: var(--Transluse2, rgba(48, 0, 119, 0.30));';
        $class = 'bg-white text-sm text-black px-[22px] py-2.5 h-11 font-bold rounded-lg gap-2.5 text-white flex flex-wrap justify-center items-center sm:px-4 sm:py-2 sm:h-10 sm:text-xs
         md:px-6 md:py-3 md:h-12 md:text-lg';
        $image = 'resources/images/bookmark.svg';
    } elseif ($type == 'watch') {
        $style = 'border-radius: 0px 16px; background: var(--Primary, #7300FF);';
        $class = 'flex px-[22px] py-2.5 justify-center items-center h-11 font-bold rounded-lg gap-2.5 flex-wrap max-sm:px-4 max-sm:py-2 max-sm:h-10 max-sm:text-xs
         md:px-6 md:py-3 md:h-12 md:text-lg';
        $image = 'resources/images/play.svg';
    }
    else {
        $style = 'border-radius: 0px 16px; background: var(--Primary, #7300FF);';
        $class = 'flex px-3 py-2.5 justify-center items-center h-11 font-bold rounded-lg gap-2.5 max-sm:px-4 max-sm:py-2 max-sm:h-10 max-sm:text-xs
         md:px-6 md:py-3 md:h-12 md:text-lg';
        $image = null;
    }
@endphp

<a href="{{ $url }}" class="{{ $class }}" style="{{ $style }}">{!! $image ? '<img src="' . Vite::asset($image) . '" >' : '' !!}{{ $slot }}</a>

