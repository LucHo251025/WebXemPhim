@props(['season_number' => 0])
<div>
    <select wire:model.live.debounce="selectedSeason"
        style="border-radius: 0px 16px; border: 1px solid var(--White, #FFF); background: var(--Transluse2, rgba(48, 0, 119, 0.30));"
        class="bg-white pr-[22px] pl-[22px] py-2.5 h-11 font-bold rounded-lg gap-2.5 text-white flex flex-wrap justify-center items-center transform-none transition-none">
        @for ($i = 1; $i <= $season_number; $i++)
            <option value="{{ $i }}">Season {{ $i }}</option>
        @endfor
    </select>
</div>

