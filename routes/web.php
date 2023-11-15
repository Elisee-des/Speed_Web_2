<?php

use App\Http\Controllers\AuthController;
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
use App\Http\Controllers\PublicController;
use App\Models\Delegue;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Les routes public, accessible au grand public

Route::get('/', [PublicController::class, 'accueil'])->name('accueil');
Route::get('/apropos', [PublicController::class, 'apropos'])->name('apropos');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

//FIN


//Les routes privés, accessible uniquement lorsqu'un utilisateur est connecter

Route::prefix('auth')->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/registerSave', [AuthController::class, 'registerSave'])->name('register.save');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginAction', [AuthController::class, 'loginAction'])->name('login.action');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {

    Route::prefix('compte')->group(function () {
        Route::get('/tableau-de-bord', [EtudiantTableaudebordController::class, 'index'])->name('etudiant.tableaudebord');
        Route::get('/resultats/liste', [ResultatsController::class, 'resultats'])->name('compte.resultats');
        Route::get('/proclamations/liste', [ProclamationController::class, 'proclamations'])->name('compte.proclamations');
        Route::get('/deliberations/liste', [DeliberationController::class, 'deliberations'])->name('compte.deliberations');
        Route::get('/aide', [AideController::class, 'aide'])->name('compte.aide');

        Route::prefix('profil')->group(function () {
            Route::controller(ProfilController::class)->group(function () {
                Route::get('/accueil', 'profil_accueil')->name("profil.accueil");
                Route::get('/edition', 'profil_edition')->name("profil.edition.profil");
                Route::get('/edition/mot-de-passe', 'profil_mot_de_passe')->name("profil.edition.motdepasse");
                Route::get('/edition/image', 'profil_edition_image')->name("profil.edition.image");
            });
        });

        
        //Les routes pour le delegue
        Route::middleware('role:delegue')->group(function () {
            Route::get('delegue-tableau-de-bord', [DelegueTableaudebordController::class, 'index'])->name('delegue.tableaudebord');
            Route::resource('resultats', GestionResultatsController::class);
            Route::resource('proclamations', GestionProclamationsController::class);
            Route::resource('deliberations', GestionDeliberationController::class);
        });
        //FIN

    });


    //Les routes pour le gestionnaire
    Route::get('gestionnaire-tableau-de-bord', [GestionnnaireTableaudebordController::class, 'index'])->name('gestionnaire.tableaudebord');
    //FIN

    //Les routes pour l'adminnistrateur
    Route::get('admin-tableau-de-bord', [AdminTableaudebordController::class, 'index'])->name('admin.tableaudebord');
    //FIN
});
