<?php

namespace App\Livewire;

use App\Models\Film;
use Livewire\Component;

class ShowMoviePage extends Component
{
    public $film;
    public $films;
    public $episode = null;
    public $episodes = null;
    public $selectedSeason;

    public function mount($slug, $season = null, $episode = null)
    {
        $this->film = Film::where('slug', $slug)->firstOrFail();
        //take film same genres
        $this->films = Film::whereHas('genres', function ($query) {
            $query->whereIn('genre_id', $this->film->genres->pluck('id'));
        })->where('id', '!=', $this->film->id)->orderBy('average_rating', 'desc')->get();;
        $this->selectedSeason = $season ?? 1;

        if (!$this->episode && $season && $episode) {
            $this->episode = $this->film->seasons()
                ->where('season_number', $season)
                ->firstOrFail()
                ->episodes()
                ->where('episode_number', $episode)
                ->firstOrFail();
        } elseif ($episode) {
            $this->episode = $this->film->seasons()
                ->where('season_number', 1)
                ->firstOrFail()
                ->episodes()
                ->where('episode_number', $episode)
                ->firstOrFail();
        }
        if ($episode) {
            $this->episodes = $this->film->seasons()
                ->where('season_number', $this->selectedSeason)
                ->firstOrFail()
                ->episodes()
                ->get();
        }
    }

    public function updatedSelectedSeason()
    {
        $this->episodes = $this->film->seasons()
            ->where('season_number', $this->selectedSeason) // Sử dụng $this->selectedSeason
            ->firstOrFail()
            ->episodes()
            ->get();

        $this->dispatch('init-swiper'); // Gửi sự kiện tới browser
    }



    public function selectRating($rating)
    {
        $this->rating = $rating;
        $this->averageRating = $rating;
        $this->totalReviews = 1;
    }

    public function render()
    {
        return view('livewire.show-movie-page');
    }

}
