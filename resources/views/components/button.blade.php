@php
    if ($type == 'trailer') {
        $style = 'background: var(--Glass, rgba(89, 77, 91, 0.20));border-radius: 0px 16px;';
        $class = 'flex px-3 py-2.5 justify-center items-center w-[156px] h-12 font-bold rounded-lg gap-2.5';
        $src = 'resources/images/play.svg';
    } elseif ($type == 'wishlist') {
        $style = 'border-radius: 0px 16px; border: 1px solid var(--White, #FFF); background: var(--Transluse2, rgba(48, 0, 119, 0.30));';
        $class = 'bg-white text-sm text-black px-8 py-3 w-[197px] h-12 font-bold rounded-lg gap-2.5 text-white flex';
        $src = 'resources/images/bookmark.svg';
    } elseif ($type == 'watch') {
        $style = 'border-radius: 0px 16px; background: var(--Primary, #7300FF);';
        $class = 'flex px-3 py-2.5 justify-center items-center w-[156px] h-12 font-bold rounded-lg gap-2.5';
        $src = 'resources/images/play.svg';
    }
    else {
        $style = 'border-radius: 0px 16px; background: var(--Primary, #7300FF);';
        $class = 'flex px-3 py-2.5 justify-center items-center w-[156px] h-12 font-bold rounded-lg gap-2.5';
        $src = null;
    }
@endphp

<button class="{{ $class }}" style="{{ $style }}">{!! $src ? '<img src="' . Vite::asset($src) . '" >' : '' !!}{{ $slot }}</button>

