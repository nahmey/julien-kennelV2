<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\FrontController::class, 'accueil'])->name('accueil');
Route::get('/accueil', [App\Http\Controllers\FrontController::class, 'accueil'])->name('accueil');

Route::get('/accueil_realisations', [App\Http\Controllers\FrontController::class, 'accueilRealisations'])->name('accueil_realisations');
