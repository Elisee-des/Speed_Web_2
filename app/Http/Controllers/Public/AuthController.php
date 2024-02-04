<?php

namespace App\Http\Controllers\Public;

use App\Helpers\RoleHelper;
use App\Models\Delegue;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except([
    //         'logout', 'dashboard'
    //     ]);
    // }

    public function register()
    {
        return view('public.auth.inscription');
    }

    public function registerSave(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nom_prenom' => 'required',
                'email' => 'required|email|max:250|unique:users',
                'password' => 'required|min:4|confirmed',
            ],
            [
                'nom_prenom.required' => 'Le champ nom et prénom est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
                // 'delegue_id.required' => 'Le champ délégué est requis.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->delegue_id) {
        }

        $user = User::create([
            'nom_prenom' => $request->nom_prenom,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $user->assignRole('Etudiant');

        if ($request->delegue_id) {
            $delegue = Delegue::find($request->delegue_id);
            $user->delegues()->attach($delegue);
        }

        return redirect()->route('login')->withMessage('Inscription réussie ! Connectez-vous maintenant.');
    }

    public function loginAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'password.required' => 'Le champ mot de passe est requis.',
            ]
        );

        //On retourn tout les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Vérifier si un utilisateur avec cet email existe
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()
                ->withErrors(['login' => "Cet email n'a pas de compte"])
                ->withInput();
        }

        //On le connecte ici
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return redirect()->back()
                ->withErrors(['login' => 'Mot de passe est incorrect'])
                ->withInput();
        }

        $request->session()->regenerate();

        $user = Auth::user();
        $redirectRoute = '';

        if ($user->hasRole('Admin')) {
            $redirectRoute = 'admin.tableaudebord';
        }

        if ($user->role == "Admin") {
            $redirectRoute = 'admin.tableaudebord';
        } elseif ($user->hasRole('Gestionnaire')) {
            $redirectRoute = 'gestionnaire.tableaudebord';
        } elseif ($user->hasRole('Etudiant')) {
            $redirectRoute = 'etudiant.tableaudebord';
        } elseif ($user->hasRole('Delegue')) {
            $redirectRoute = 'delegue.tableaudebord';
        }

        if (!empty($redirectRoute)) {
            return redirect()->route($redirectRoute)->withMessage("Connexion réussie ! Bienvenue, {$user->nom_prenom}");
        }
    }

    public function login()
    {
        return view('public.auth.connexion');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('accueil')
            ->withSuccess('Vous avez été deconnecté avec succès');;
    }
}
