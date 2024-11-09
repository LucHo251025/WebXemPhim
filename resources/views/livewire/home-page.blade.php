<div>
    <x-home-slider :films="$films" />
    <x-small-slider :films="$films" title="Latest Releases" />
    <x-small-slider :films="$films" title="Trending films & Shows" name="trending" />
    <livewire:most-watched :films="$films" name="most-watched"/>
    <livewire:genres-slider name="genres"/>
</div>

