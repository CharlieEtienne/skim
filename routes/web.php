<?php

use Ijpatricio\Skim\Http\Controllers\SkimPageController;
use Illuminate\Support\Facades\Route;

Route::get('/full-porto', function () {
    return view('skim-porto::home');
})->name('skim.home');

Route::fallback(SkimPageController::class)
    ->name('skim-page-controller');
