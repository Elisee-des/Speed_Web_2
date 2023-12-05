<?php

namespace App\Http\Controllers\Private\Etudiant;

use App\Http\Controllers\Controller;
use App\Models\Delegue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DelegueController extends Controller
{
    public function index()
    {
        $delegues = Auth::user()->delegues;
        $delegue_chefs = Delegue::all();

        return view('private.etudiant.delegues', compact('delegues', 'delegue_chefs'));
    }

    public function detail(Request $request, $idDelegue)
    {
        $delegue = Delegue::find($idDelegue);

        $idDelegue_1 = $delegue->id_delegue_1;
        $idDelegue_2 = $delegue->id_delegue_2;

        $delegue_1 = User::find($idDelegue_1);
        $delegue_2 = User::find($idDelegue_2);


        return view('private.etudiant.detail-delegue', compact('delegue_1', 'delegue_2'));
    }

    public function suivre_action(Request $request)
    {
        if ($request->delegue_id) {
            $idDelegue = $request->delegue_id;
        }
        return redirect()->back()->with('message', 'Opération reussis!!!.');
    }

    public function parametre_delegue()
    {
        $user = auth()->user();
        $delegues = Delegue::whereDoesntHave('users', function ($query) use ($user) {
            $query->where('users.id', $user->id);
        })->get();

        return view('private.etudiant.parametre-delegue', compact('delegues'));
    }

    public function parametre_delegue_ajout(Request $request)
    {
        $idDelegue = $request->delegue_id;
        $delegue = Delegue::findOrFail($idDelegue);
        $user = auth()->user();

        if ($delegue) {
            $user->delegues()->attach($delegue);
            return redirect()->back()->with('message', 'Opération reussis! Délégués ajouter avec succcès.');
        } else {
            return redirect()->back()->with('message', "Desolé! Ces délégués n'existe pas.");
        }
    }

    public function parametre_delegue_detache(Request $request, $idDelegue)
    {
        $delegue = Delegue::findOrFail($idDelegue);
        $user = auth()->user();

        if ($delegue) {
            $user->delegues()->detach($delegue);
            return redirect()->back()->with('message', 'Opération reussis! Délégués detachés avec succcès.');
        } else {
            return redirect()->back()->with('message', "Desolé! Ces délégués n'existe pas.");
        }
    }

    public function etudiants_liste()
    {
        $delegue = auth()->user();
        $etudiants = $delegue->users;
        dd($etudiants);
        
        return view('private.chef.etudiants.index', compact('etudiants'));
    }
}
