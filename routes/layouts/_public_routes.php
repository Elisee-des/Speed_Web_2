<?php

use App\Http\Controllers\Public\AutresController;
use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\Public\RealisationController;
use Illuminate\Support\Facades\Route;

/**************** Public routes *****************/

Route::get('/', [PublicController::class, 'accueil'])->name('accueil');
Route::get('/affiches', [PublicController::class, 'affiches'])->name('affiches');
Route::get('/affiches/detail/{id}', [PublicController::class, 'affiches_detail'])->name('affiches.detail');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

Route::prefix('realisations')->name('realisations.')->group(function () {
    Route::get('/listes', [RealisationController::class, 'index'])->name('index');
    Route::get('/etudiants/{id}', [RealisationController::class, 'etudiants_liste'])->name('etudiants-liste');
    Route::get('/ma-page/{idOption}/{idEtudiant}', [RealisationController::class, 'ma_page'])->name('mapage');
});
// Route::get('/Realisations', [PublicController::class, 'realisation'])->name('realisastion');


Route::get('/accès refusé', [AutresController::class, 'page_access_refuser'])->name('page.access.refuser');
Route::get('/page introuvable', [AutresController::class, 'page_introuvable'])->name('page.introuvable');