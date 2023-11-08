<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function inscription()
    {
        return view('auth.inscription');
    }

    public function inscription_etudiant()
    {
        return view('auth.inscription-etudiant');
    }

    public function inscription_delegue()
    {
        return view('auth.inscription-delegue');
    }

    public function inscription_save(Request $request)
    {
        // Validator::make(
        //     $request->all(),
        //     [
        //         'name' => 'required',
        //         'email' => 'required|email',
        //         'password' => 'required|confirmed'
        //     ]
        // );

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'phone' => $request->phone,
        //     'adress' => $request->adress,

        // ]);

        return redirect()->route('auth.connexion');
    }

    public function connexion()
    {
        return view('auth.connexion');
    }

    public function connexion_action(Request $request)
    {
        // Validator::make($request->all(), [
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ])->validate();

        // if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        //     throw ValidationException::withMessages([
        //         'email' => trans('auth.failed')
        //     ]);
        // }

        // $request->session()->regenerate();

        return redirect()->route("compte.resultats");
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
