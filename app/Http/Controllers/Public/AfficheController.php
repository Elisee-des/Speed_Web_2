<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Affiche;
use Illuminate\Http\Request;

class AfficheController extends Controller
{
    public function affiches()
    {
        $affiches = Affiche::with('user', 'semestre', 'universite', 'categorie')->orderBy('created_at', 'desc')->get();
        return view('public.affiches.affiches', compact('affiches'));
    }

    public function affiches_detail($idAffiche)
    {
        $affiche = Affiche::where('id', $idAffiche)->with('semestre', 'categorie', 'universite', 'user', 'images')->get()->first();

        return view('public.affiches.affiches-detail', compact('affiche'));
    }
}
