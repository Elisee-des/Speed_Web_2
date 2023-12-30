<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Affiche;
use App\Models\Semestre;
use App\Models\Universite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GestionSemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $semestres = Semestre::where('user_id', $user->id)->with('universite')->orderBy('created_at', 'desc')->get();
        return view('private.chef.gestion-semestres.index', compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universites = Universite::all();
        return view('private.chef.gestion-semestres.create', compact('universites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required|min:20|unique:semestres',
                'universite_id' => 'required',
            ],
            [
                'universite_id.required' => 'Le champ université est requis.',
                'nom.required' => 'Le champ nom est requis.',
                'nom.unique' => 'Le nom est déja utilisé.',
                'nom.min' => 'Votre test doit faire au minimun :min caratères.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $semestre = Semestre::create([
            'nom' => $request->nom,
            'user_id' => $user->id,
            'universite_id' => $request->universite_id,
        ]);

        $semestre->save();

        return redirect()->route('delegue.semestres.show', $semestre)->with('success', "L'opération est un avec succès !!!.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idSemestre)
    {
        $semestre = Semestre::find($idSemestre);
        $affiches = Affiche::where('semestre_id', $idSemestre)->get();
        return view(
            'private.chef.gestion-semestres.detail',
            [
                'semestre' => $semestre,
                'affiches' => $affiches
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $semestre = Semestre::find($id);
        $semestre->nom = $request->nom;
        $semestre->save();

        return redirect()->back()->with('success', "Le nom a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $semestre = Semestre::find($id);
        $semestre->delete();
        return redirect()->route('delegue.semestres.index', $semestre)->with('success', "Semestre supprimé avec succès !!!.");
    }
}
