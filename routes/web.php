<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::middleware(['web', 'set.language'])->group(function () {
        Route::get('/', Home::class)->name('home');

});