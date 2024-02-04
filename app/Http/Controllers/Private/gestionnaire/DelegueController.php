<?php

namespace App\Http\Controllers\Private\gestionnaire;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DelegueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $delegues = Auth::user()->delegues()->get();
        return view('private.gestionnaire.delegue.index', compact("delegues"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.gestionnaire.delegue.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'nom_prenom' => 'required',
                'email' => 'required|email|max:250|unique:users',
                'password' => 'required|min:4',
            ],
            [
                'nom_prenom.required' => 'Le champ nom et prénom est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                // 'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
                // 'delegue_id.required' => 'Le champ délégué est requis.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->gestionnaire_id) {
        }

        $user = User::create([
            'nom_prenom' => $request->nom_prenom,
            'email' => $request->email,
            'password' => $request->password,
            'gestionnaire_id' => Auth::user()->id
        ]);
        $user->assignRole('Delegue');

        return redirect()->route('gestionnaire.delegues.index')->withMessage('Compte crée avec succès ! Votre délégué peut désormais se connecté a CAMPUS-AFFICHES.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $delegue = User::find($id);
        return view('private.gestionnaire.delegue.edit', compact("delegue"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nom_prenom' => 'required',
                'email' => 'required',
                // 'password' => 'required|min:4',
            ],
            [
                'nom_prenom.required' => 'Le champ nom et prénom est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                // 'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                // 'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
                // 'delegue_id.required' => 'Le champ délégué est requis.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find($id);
        $user->nom_prenom = $request->nom_prenom;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($request->role == 'Delegue') {
            $user->assignRole('Delegue');
        }
        if ($request->role == 'Etudiant') {
            $user->assignRole('Etudiant');
        }

        $user->save();

        return redirect()->route('gestionnaire.delegues.index')->with('success', "Les informations ont été modifié avecc succès.");
    }

    public function edtionDelegue(Request $request, string $id)
    {
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delegue = User::find($id);
        $delegue->delete();
        return redirect()->route('gestionnaire.delegues.index')->with('success', "Délégué supprimé avecc succès.");
    }
}
