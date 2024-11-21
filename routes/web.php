<?php

use App\Livewire\ForgotPassword;
use App\Livewire\HomePage;
use App\Livewire\LoginPage;
use App\Livewire\PlayPage;
use App\Livewire\RegisterPage;
use App\Livewire\ResetPassword;
use App\Livewire\HomeUpcomingMovies;
use App\Livewire\ShowMoviePage;
use App\Livewire\SupportMoviePage;
use App\Livewire\SubscriptionPage;
use  App\Livewire\Explore;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/play-page', PlayPage::class);
Route::get('/explore/{type}', Explore::class)
    ->where('type', 'movie|show')
    ->name('{type}');
Route::get('/explore', function () {
    return redirect('/explore/movie');
});


Route::get('/UpcomingMoves-page', HomeUpcomingMovies::class);
Route::get('/support-page', SupportMoviePage::class);
Route::get('/show-movie-page', ShowMoviePage::class);


Route::get('/subscription-page',SubscriptionPage::class);
Route::get('/login', LoginPage::class)->name('login');
Route::get('/register', RegisterPage::class)->name('register');
Route::get('/forgot-password', ForgotPassword::class)->name('password.request');
Route::get('/reset/{token}', ResetPassword::class)->name('password.reset');
