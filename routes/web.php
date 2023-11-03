<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Private\AideController;
use App\Http\Controllers\Private\DeliberationController;
use App\Http\Controllers\Private\ProclamationController;
use App\Http\Controllers\Private\ProfilController;
use App\Http\Controllers\Private\ResultatsController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Les routes public, accessible au grand public

Route::get('/', [PublicController::class, 'accueil'])->name('accueil');
Route::get('/apropos', [PublicController::class, 'apropos'])->name('apropos');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');


//Les routes privés, accessible uniquement lorsqu'un utilisateur est connecter

Route::prefix('auth')->group(function () {
    Route::get('/inscription', [AuthController::class, 'inscription'])->name('auth.inscription');
    Route::get('/inscription/save', [AuthController::class, 'inscription_save'])->name('auth.inscription.save');
    Route::get('/connexion', [AuthController::class, 'connexion'])->name('auth.connexion');
    Route::get('/connexion/action', [AuthController::class, 'connexion_action'])->name('auth.connexion.action');
});

Route::prefix('compte')->group(function () {
    Route::get('/resultats', [ResultatsController::class, 'resultats'])->name('compte.resultats');
    Route::get('/proclamations', [ProclamationController::class, 'proclamations'])->name('compte.proclamations');
    Route::get('/deliberations', [DeliberationController::class, 'deliberations'])->name('compte.deliberations');
    Route::get('/aide', [AideController::class, 'aide'])->name('compte.aide');

    Route::prefix('profil')->group(function () {
        Route::controller(ProfilController::class)->group(function () {
            Route::get('/accueil', 'profil_accueil')->name("profil.accueil");
            Route::get('/edition', 'profil_edition')->name("profil.edition.profil");
            Route::get('/edition/mot-de-passe', 'profil_mot_de_passe')->name("profil.edition.motdepasse");
            Route::get('/edition/image', 'profil_edition_image')->name("profil.edition.image");
        });
    });
});
