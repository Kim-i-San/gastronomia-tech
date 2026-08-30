<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $locale = request()->getPreferredLanguage(['en', 'fr', 'de', 'it']) ?? 'en';

    return redirect("/{$locale}");
});

Route::prefix('{locale}')
    ->where(['locale' => 'en|fr|de|it'])
    ->middleware('locale')
    ->group(function () {

        Route::view('/', 'home')
            ->name('home');

        Route::view('/contact', 'contact')
            ->name('contact');

        Route::view('/legal', 'legal')
            ->name('legal');

    });