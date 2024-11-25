<?php

use App\Livewire\HomePage;
use App\Livewire\PlayPage;
use App\Livewire\ProfilePage;

use App\Livewire\SubscriptionPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/play-page', PlayPage::class);
Route::get('/subscription-page',SubscriptionPage::class);
Route::get('/profile-page/{id}',ProfilePage::class);
Route::get('/subscription-page/{name}',\App\Livewire\Service::class);


//Route::middleware('guest')->group(function () {
    Route::get('/login',\App\Livewire\LoginPage::class)->name('login');
    Route::get('/register',\App\Livewire\RegisterPage::class)->name('register');
    Route::get('/forgot-password',\App\Livewire\ForgotPassword::class)->name('password.request');
    Route::get('/reset/{token}/{email}',\App\Livewire\ResetPassword::class)->name('password.reset');
//});


Route::middleware('auth')->group(function () {

});

