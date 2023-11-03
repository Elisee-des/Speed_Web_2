<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil_accueil()
    {
        return view('private.profil.accueil');
    }
    
    public function profil_edition()
    {
        return view('private.profil.edition');
    }

    public function profil_mot_de_passe()
    {
        return view('private.profil.edition-motdepasse');
    }

    public function profil_edition_image()
    {
        return view('private.profil.edition-image');
    }
}
