<?php

namespace App\Http\Controllers;

use App\Models\Delegue;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
        $delegues = Delegue::all();

        return view('auth.inscription', compact('delegues'));
    }

    public function registerSave(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'nom_prenom' => 'required',
                'email' => 'required|email|max:250|unique:users',
                'password' => 'required|min:8|confirmed',
                'delegue_id' => 'required',
            ]
        );

        User::create([
            'nom_prenom' => $request->nom_prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        return redirect()->route('login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();
        $redirectRoute = '';
        
        if (in_array($user->role, ['Admin'])) {
            $redirectRoute = 'admin.tableaudebord';
        } elseif (in_array($user->role, ['Gestionnaire'])) {
            $redirectRoute = 'gestionnaire.tableaudebord';
        }
        elseif (in_array($user->role, ['Etudiant'])) {
            $redirectRoute = 'etudiant.tableaudebord';
        } elseif (in_array($user->role, ['Delegue'])) {
            $redirectRoute = 'delegue.tableaudebord';
        }

        if (!empty($redirectRoute)) {
            return redirect()->route($redirectRoute);
        }
    }

    public function login()
    {
        return view('auth.connexion');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('accueil')
            ->withSuccess('Vous êtes deconnecter avec succès');;
    }
}
