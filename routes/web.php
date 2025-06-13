<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\FrontController::class, 'accueil'])->name('accueil');
Route::get('/accueil', [App\Http\Controllers\FrontController::class, 'accueil'])->name('accueil');
Route::get('/realisations', [App\Http\Controllers\FrontController::class, 'realisations'])->name('realisations');
Route::get('/technologies', [App\Http\Controllers\FrontController::class, 'technologies'])->name('technologies');
Route::get('/a-propos', [App\Http\Controllers\FrontController::class, 'apropos'])->name('a-propos');

Route::get('/get_avis_google', [App\Http\Controllers\FrontController::class, 'getAvisGoogle'])->name('get_avis_google');
Route::get('/accueil_realisations', [App\Http\Controllers\FrontController::class, 'accueilRealisations'])->name('accueil_realisations');

Route::get('/mentions_legales', [App\Http\Controllers\FrontController::class, 'mentionsLegales'])->name('mentions_legales');