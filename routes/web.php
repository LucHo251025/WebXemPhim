<?php

use App\Livewire\HomePage;
use App\Livewire\PlayPage;
use App\Livewire\HomeUpcomingMovies;
use App\Livewire\SupportMoviePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/play-page', PlayPage::class);
Route::get('/UpcomingMoves-page', HomeUpcomingMovies::class);
Route::get('/support-page', SupportMoviePage::class);





?>
