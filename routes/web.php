<?php

use App\Livewire\HomePage;
use App\Livewire\PlayPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/play-page', PlayPage::class);
