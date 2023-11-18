<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutresController extends Controller
{
    public function page_introuvable()
    {
        return view('layouts.autres.errors404');
    }

    public function page_access_refuser()
    {
        return view('layouts.autres.errors403');
    }
}
