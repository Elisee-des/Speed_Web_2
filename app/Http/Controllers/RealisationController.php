<?php

namespace App\Http\Controllers;

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
}