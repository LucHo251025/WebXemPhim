<?php

use App\Livewire\HomePage;
use App\Livewire\PlayPage;
use App\Livewire\SubscriptionPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/play-page', PlayPage::class);
Route::get('/subscription-page',SubscriptionPage::class);
Route::get('/login',\App\Livewire\LoginPage::class)->name('login');
Route::get('/register',\App\Livewire\RegisterPage::class)->name('register');
