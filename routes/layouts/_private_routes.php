<?php

use App\Http\Controllers\Private\Admin\AdminTableaudebordController;
use App\Http\Controllers\Private\AideController;
use App\Http\Controllers\Private\Chef\DelegueTableaudebordController;
use App\Http\Controllers\Private\Chef\GestionDeliberationController;
use App\Http\Controllers\Private\Chef\GestionProclamationsController;
use App\Http\Controllers\Private\Chef\GestionResultatsController;
use App\Http\Controllers\Private\DeliberationController;
use App\Http\Controllers\Private\Etudiant\EtudiantTableaudebordController;
use App\Http\Controllers\private\gestionnaire\GestionnnaireTableaudebordController;
use App\Http\Controllers\Private\ProclamationController;
use App\Http\Controllers\Private\ProfilController;
use App\Http\Controllers\Private\ResultatsController;
use Illuminate\Support\Facades\Route;

/************************************* Pivates routes ****************************************/

/********   Etudiant  ********/

Route::middleware('auth')->group(function () {
    Route::prefix('compte')->group(function () {
        Route::get('/tableau-de-bord', [EtudiantTableaudebordController::class, 'index'])->name('etudiant.tableaudebord');
        Route::get('/resultats/liste', [ResultatsController::class, 'resultats'])->name('compte.resultats');
        Route::get('/proclamations/liste', [ProclamationController::class, 'proclamations'])->name('compte.proclamations');
        Route::get('/deliberations/liste', [DeliberationController::class, 'deliberations'])->name('compte.deliberations');
        Route::get('/aide', [AideController::class, 'aide'])->name('compte.aide');

        Route::prefix('profil')->name('profil.')->group(function () {
            Route::controller(ProfilController::class)->group(function () {
                Route::get('/accueil', 'profil_accueil')->name("accueil");
                Route::get('/edition', 'profil_edition')->name("edition.profil");
                Route::post('/edition/action', 'edit_profil_action')->name("edition.action");
                Route::get('/edition/mot-de-passe', 'profil_mot_de_passe')->name("edition.motdepasse");
                Route::post('/edition/mot-de-passe/action', 'profil_mot_de_passe_action')->name("edition.motdepasse.action");
                Route::get('/edition/image', 'profil_edition_image')->name("edition.image");
            });
        });
    });

    /******** Fin  Etudiant  ********/




    /********   Delegue  ********/

    Route::middleware('role:Delegue')->name('delegue.')->prefix('delegue')->group(
        function () {
            Route::get('tableau-de-bord', [DelegueTableaudebordController::class, 'index'])->name('tableaudebord');
            Route::resource('resultats', GestionResultatsController::class);
            Route::resource('proclamations', GestionProclamationsController::class);
            Route::resource('deliberations', GestionDeliberationController::class);
        }
    );

    /********   Fin Delegue  ********/




    /********   Gestionnaire  ********/

    Route::middleware('role:Gestionnaire')->name('gestionnaire.')->prefix('gestionnaire')->group(
        function () {
            Route::get('tableau-de-bord', [GestionnnaireTableaudebordController::class, 'index'])->name('tableaudebord');
        }
    );

    /******** Fin  Gestionnaire  ********/




    /********   Admin  ********/

    Route::middleware('role:Admin')->name('admin.')->prefix('admin')->group(
        function () {
            Route::get('tableau-de-bord', [AdminTableaudebordController::class, 'index'])->name('tableaudebord');
        }
    );

    /********  Fin  Admin  ********/
});
