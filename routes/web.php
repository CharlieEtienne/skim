<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('skim-porto::home');
})->name('skim.home');
