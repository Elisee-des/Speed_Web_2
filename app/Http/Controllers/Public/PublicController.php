<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Affiche;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function accueil()
    {
        return view('public.index');
    }

    public function affiches()
    {
        $affiches = Affiche::with('user', 'semestre', 'universite', 'categorie')->orderBy('created_at', 'desc')->get();
        return view('public.affiches', compact('affiches'));
    }

    public function affiches_detail($idAffiche)
    {
        $affiche = Affiche::where('id', $idAffiche)->with('semestre', 'categorie', 'universite', 'user', 'images')->get()->first();

        return view('public.affiches-detail', compact('affiche'));
    }

    public function contact()
    {
        return view('public.contact');
    }
}
