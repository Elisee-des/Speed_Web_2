<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        return view('public.realisations.index');
    }

    public function etudiants_liste($id)
    {
        return view('public.realisations.etudiants-liste');
    }

    public function ma_page($idOption, $idEtudiant)
    {
        return view('public.realisations.ma-page');
    }
}
