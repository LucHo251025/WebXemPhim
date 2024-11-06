<div>
    <x-home-slider/>
    <x-small-slider :movies="$movies" title="Latest Releases" />
    <x-small-slider :movies="$movies" title="Trending Movies & Shows" name="trending" />
    <x-most-watched :movies="$movies" />
</div>

