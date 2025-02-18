<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('tournaments', \App\Livewire\Tournament\Index::class)->name('tournament.index');
    Route::get('tournaments/create', \App\Livewire\Tournament\Create::class)->name('tournament.create');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
