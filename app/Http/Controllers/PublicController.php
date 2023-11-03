<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function accueil()
    {
        return view('index');
    }

    public function apropos()
    {
        return view('apropos');
    }

    public function contact()
    {
        return view('contact');
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function connexion()
    {
        return view('connexion');
    }
}
