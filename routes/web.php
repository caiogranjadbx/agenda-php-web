<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::patch('/contacts/{contact}/favorite', [ContactController::class, 'toggleFavorite'])
    ->name('contacts.favorite');

Route::get('/favorites', [ContactController::class, 'favorites'])
    ->name('contacts.favorites');

Route::resource('contacts', ContactController::class);