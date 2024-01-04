<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Affiche;
use App\Models\Categorie;
use Illuminate\Http\Request;

class DelegueTableaudebordController extends Controller
{
    public function index()
    {
        $user = auth()->user();
    
        // Obtenez les affiches de chaque type pour l'utilisateur connecté
        $resultats = $user->affiches()->whereHas('categorie', function ($query) {
            $query->where('nom', 'Résultat');
        })->get();

        $proclamations = $user->affiches()->whereHas('categorie', function ($query) {
            $query->where('nom', 'Proclamation');
        })->get();

        $deliberations = $user->affiches()->whereHas('categorie', function ($query) {
            $query->where('nom', 'Délibération');
        })->get();
    
        // Obtenez le total pour chaque type d'affiche
        $totalResultat = $resultats->count();
        $totalProclamation = $proclamations->count();
        $totalDeliberation = $deliberations->count();
    
        return view('private.chef.index', [
            'totalResultat' => $totalResultat,
            'totalProclamation' => $totalProclamation,
            'totalDeliberation' => $totalDeliberation,
        ]);
    }
    
    
}
