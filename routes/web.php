<?php

use App\Livewire\HomePage;
use App\Livewire\PlayPage;
use App\Livewire\HomeUpcomingMovies;
use App\Livewire\ShowMoviePage;
use App\Livewire\SupportMoviePage;
use App\Livewire\SubscriptionPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/play-page', PlayPage::class);

Route::get('/UpcomingMoves-page', HomeUpcomingMovies::class);
Route::get('/support-page', SupportMoviePage::class);
Route::get('/show-movie-page', ShowMoviePage::class);


Route::get('/subscription-page',SubscriptionPage::class);
Route::get('/login',\App\Livewire\LoginPage::class)->name('login');
Route::get('/register',\App\Livewire\RegisterPage::class)->name('register');
Route::get('/forgot-password',\App\Livewire\ForgotPassword::class)->name('password.request');
Route::get('/reset/{token}',\App\Livewire\ResetPassword::class)->name('password.reset');
