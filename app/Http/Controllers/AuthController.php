<?php

namespace App\Http\Controllers;

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

        $user = User::create([
            'nom_prenom' => $request->nom_prenom,
            'email' => $request->email,
            'password' => $request->password,

        ]);

        $user->assignRole('Admin');

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
        // dd($request->all());

        $request->session()->regenerate();

        // $roles = RoleHelper::getUserRoles();

        $user = Auth::user();
        // $roles = $user->getRoleNames();
        $redirectRoute = '';

        if ($user->hasRole('Admin')) {
            $redirectRoute = 'admin.tableaudebord';
        } elseif ($user->hasRole('Gestionnaire')) {
            $redirectRoute = 'gestionnaire.tableaudebord';
        } elseif ($user->hasRole('Etudiant')) {
            $redirectRoute = 'etudiant.tableaudebord';
        } elseif ($user->hasRole('Delegue')) {
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
