<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutresController extends Controller
{
    public function page_introuvable()
    {
        return view('layouts.autres.page-introuvable');
    }

    public function page_access_refuser()
    {
        return view('layouts.autres.page-access-refuser');
    }
}
