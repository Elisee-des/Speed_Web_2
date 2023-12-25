<?php

use App\Http\Controllers\Private\Admin\AdminTableaudebordController;
use App\Http\Controllers\private\Admin\GestionnaireController;
use App\Http\Controllers\Private\AideController;
use App\Http\Controllers\Private\Chef\DelegueTableaudebordController;
use App\Http\Controllers\Private\Chef\GestionAfficheController;
use App\Http\Controllers\Private\Chef\GestionDeliberationController;
use App\Http\Controllers\Private\Chef\GestionProclamationsController;
use App\Http\Controllers\Private\Chef\GestionResultatsController;
use App\Http\Controllers\Private\Chef\GestionSemestreController;
use App\Http\Controllers\Private\DeliberationController;
use App\Http\Controllers\Private\Etudiant\AfficheController;
use App\Http\Controllers\Private\Etudiant\DelegueController;
use App\Http\Controllers\Private\Etudiant\EtudiantTableaudebordController;
use App\Http\Controllers\Private\Etudiant\NotificationController;
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

                Route::get('/edition/email', 'profil_edition_email')->name("edition.email");
                Route::post('/edition/email/action', 'profil_edition_email_action')->name("edition.email.action");

                Route::get('/edition/mot-de-passe', 'profil_mot_de_passe')->name("edition.motdepasse");
                Route::post('/edition/mot-de-passe/action', 'profil_mot_de_passe_action')->name("edition.motdepasse.action");

                Route::get('/edition/image', 'profil_edition_image')->name("edition.image");
                Route::post('/edition/image/action', 'profil_edition_image_action')->name("edition.image.action");
            });
        });
    });


    
    Route::prefix('etudiant')->name('etudiant.')->group(function () {
        Route::get('/delegues/liste', [DelegueController::class, 'index'])->name('delegues');
        Route::get('/delegues/detail/{idDelegue}', [DelegueController::class, 'detail'])->name('delegues.detail');
        Route::post('/delegues/detail/suicis/action', [DelegueController::class, 'suivre_action'])->name('delegues.suivis.action');
        Route::get('/delegues/paramètre', [DelegueController::class, 'parametre_delegue'])->name('delegues.parametre');
        Route::post('/delegues/paramètre/ajout', [DelegueController::class, 'parametre_delegue_ajout'])->name('delegues.parametre.ajout');
        Route::post('/delegues/paramètre/detache/{idDelegue}', [DelegueController::class, 'parametre_delegue_detache'])->name('delegues.parametre.detache');
        Route::get('/notifications', [NotificationController::class, 'notification'])->name('notifications');
    });
    

    /******** Fin  Etudiant  ********/




    /********   Delegue  ********/

    Route::middleware('role:Delegue')->name('delegue.')->prefix('delegue')->group(
        function () {
            Route::get('tableau-de-bord', [DelegueTableaudebordController::class, 'index'])->name('tableaudebord');
            Route::resource('resultats', GestionResultatsController::class);
            Route::resource('proclamations', GestionProclamationsController::class);
            Route::resource('deliberations', GestionDeliberationController::class);
            Route::resource('semestres', GestionSemestreController::class);

            // Route::prefix('resultats')->group(function () {
            //     Route::post('edtion-nom-du-module/action{idResultat}/', [GestionResultatsController::class, 'edition_nom_module'])->name('edition-nom-module.action');
            //     Route::post('suppresion-image-du-module/action/{idResultat}/{idImage}/', [GestionResultatsController::class, 'suppression_image'])->name('suppression-image.action');
            //     Route::post('edtion-image-du-module/action/{idResultat}/{idImage}/', [GestionResultatsController::class, 'edition_image'])->name('edition-image.action');
            //     Route::post('ajout-image-du-module/action/{idResultat}/', [GestionResultatsController::class, 'ajout_image'])->name('ajout-image.action');
            //     Route::delete('suppresion-module/action/{idResultat}/', [GestionResultatsController::class, 'destroy'])->name('suppresion-module.action');
            //     Route::post('affiche/{idResultat}/', [GestionResultatsController::class, 'affiche_resultat'])->name('resultats.affiche');
            //     Route::post('cache/{idResultat}/', [GestionResultatsController::class, 'cache_resultat'])->name('resultats.cacher');
            // });

            // Route::prefix('proclamations')->name('proclamations.')->group(function () {
            //     Route::post('edtion-nom-du-module/action{idProclamation}/', [GestionProclamationsController::class, 'edition_nom_module'])->name('edition-nom-module.action');
            //     Route::post('suppresion-image-du-module/action/{idProclamation}/{idImage}/', [GestionProclamationsController::class, 'suppression_image'])->name('suppression-image.action');
            //     Route::post('edtion-image-du-module/action/{idProclamation}/{idImage}/', [GestionProclamationsController::class, 'edition_image'])->name('edition-image.action');
            //     Route::post('ajout-image-du-module/action/{idProclamation}/', [GestionProclamationsController::class, 'ajout_image'])->name('ajout-image.action');
            //     Route::delete('suppresion-module/action/{idProclamation}/', [GestionProclamationsController::class, 'destroy'])->name('suppresion-module.action');
            //     Route::post('affiche/{idProclamation}/', [GestionProclamationsController::class, 'affiche_resultat'])->name('affiche');
            //     Route::post('cache/{idProclamation}/', [GestionProclamationsController::class, 'cache_resultat'])->name('cacher');
            // });

            // Route::prefix('deliberations')->name('deliberations.')->group(function () {
            //     Route::post('edtion-nom-du-module/action{idDeliberation}/', [GestionDeliberationController::class, 'edition_nom_module'])->name('edition-nom-module.action');
            //     Route::post('suppresion-image-du-module/action/{idDeliberation}/{idImage}/', [GestionDeliberationController::class, 'suppression_image'])->name('suppression-image.action');
            //     Route::post('edtion-image-du-module/action/{idDeliberation}/{idImage}/', [GestionDeliberationController::class, 'edition_image'])->name('edition-image.action');
            //     Route::post('ajout-image-du-module/action/{idDeliberation}/', [GestionDeliberationController::class, 'ajout_image'])->name('ajout-image.action');
            //     Route::delete('suppresion-module/action/{idDeliberation}/', [GestionDeliberationController::class, 'destroy'])->name('suppresion-module.action');
            //     Route::post('affiche/{idDeliberation}/', [GestionDeliberationController::class, 'affiche_resultat'])->name('affiche');
            //     Route::post('cache/{idDeliberation}/', [GestionDeliberationController::class, 'cache_resultat'])->name('cacher');
            // });

            Route::prefix('affiches')->name('affiches.')->group(function () {
                Route::get('ajout/{idSemestre}/', [GestionAfficheController::class, 'ajout_affiche'])->name('ajout');
                Route::post('ajout/action/{idSemestre}/', [GestionAfficheController::class, 'ajout_affiche_action'])->name('action');
                Route::get('detail/{idSemestre}/{idAffiche}/', [GestionAfficheController::class, 'detail_affiche'])->name('detail');

                Route::post('edition-nom-affiche/action/{idAffiche}/', [GestionAfficheController::class, 'edition_nom_affiche'])->name('edition-nom-affiche.action');
                Route::delete('suppresion-image-de-l-affiche/action/{idAffiche}/{idImage}/', [GestionAfficheController::class, 'suppression_image'])->name('suppression-image.action');
                Route::post('edtion-image-du-module/action/{idAffiche}/{idImage}/', [GestionAfficheController::class, 'edition_image'])->name('edition-image.action');
                Route::get('ajout-image-affiche/{idSemestre}/{idAffiche}/', [GestionAfficheController::class, 'ajout_image'])->name('ajout-image');
                Route::post('ajout-image-affiche/action/{idSemestre}/{idAffiche}/', [GestionAfficheController::class, 'ajout_image_action'])->name('ajout-image.action');
                Route::delete('suppresion-affiche/action/{idSemestre}/{idAffiche}/', [GestionAfficheController::class, 'destroy'])->name('suppression-affiche.action');
                Route::post('affiche/{idAffiche}/', [GestionAfficheController::class, 'afficher_affiche'])->name('afficher');
                Route::post('cache/{idAffiche}/', [GestionAfficheController::class, 'cacher_affiche'])->name('cacher');
            });

            Route::get('etudiant/liste', [DelegueController::class, 'etudiants_liste'])->name('etudiants.liste');
            Route::get('etudiant/liste', [DelegueController::class, 'etudiants_liste'])->name('etudiants.liste');
            Route::get('etudiant/ajout', [DelegueController::class, 'ajout_etudiant'])->name('etudiants.create');
            Route::get('gestionnaire/detail/{idGestionnaire}', [DelegueController::class, 'gestionnaire_detail'])->name('gestionnaire.detail');
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
            Route::resource('gestionnaires', GestionnaireController::class);
        }
    );

    /********  Fin  Admin  ********/
});
