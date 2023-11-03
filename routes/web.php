<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Les routes public, accessible au grand public

Route::get('/', [PublicController::class, 'accueil'])->name('accueil');
Route::get('/apropos', [PublicController::class, 'apropos'])->name('apropos');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/inscription', [PublicController::class, 'inscription'])->name('inscription');
Route::get('/connexion', [PublicController::class, 'connexion'])->name('connexion');


//Les routes privés, accessible uniquement lorqu'un utilisateur est connecter
