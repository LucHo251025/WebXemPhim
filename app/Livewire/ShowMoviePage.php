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
        // Lấy film theo slug
        $this->film = Film::where('slug', $slug)->firstOrFail();

        // Nếu là show và không có season/episode, điều hướng đúng URL
        if ($this->film->type === 'show' && !$season && !$episode) {
            if ($this->film->hasManySeasons()) {
                return redirect()->to("/watch/{$slug}/season/1/episode/1");
            }
            return redirect()->to("/watch/{$slug}/episode/1");
        }

        // Xử lý episode khi có season và episode
        if ($season && $episode) {
            $this->loadEpisode($season, $episode);
        } elseif ($episode) { // Khi chỉ có episode
            $this->loadEpisode(1, $episode); // Mặc định season = 1
        }

        // Lấy danh sách episode của season đang chọn
        if ($this->selectedSeason) {
            $this->episodes = $this->getEpisodesForSeason($this->selectedSeason);
        }

        // Gợi ý các phim cùng thể loại
        $this->films = $this->getSuggestedFilms();
        $this->selectedSeason = $season ?? 1;
    }

    private function loadEpisode($season, $episode)
    {
        $seasonModel = $this->film->seasons()
            ->where('season_number', $season)
            ->firstOrFail();

        $this->episode = $seasonModel->episodes()
            ->where('episode_number', $episode)
            ->firstOrFail();

        $this->selectedSeason = $season;
    }

    private function getEpisodesForSeason($season)
    {
        return $this->film->seasons()
            ->where('season_number', $season)
            ->firstOrFail()
            ->episodes()
            ->get();
    }

    private function getSuggestedFilms()
    {
        return Film::whereHas('genres', function ($query) {
            $query->whereIn('genre_id', $this->film->genres->pluck('id'));
        })->where('id', '!=', $this->film->id)
            ->orderBy('average_rating', 'desc')
            ->take(12)
            ->get();
    }

    public function updatedSelectedSeason()
    {
        $this->episodes = $this->getEpisodesForSeason($this->selectedSeason);
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
