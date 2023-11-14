<?php

namespace App\Http\Controllers\private\gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionnnaireTableaudebordController extends Controller
{
    public function index()
    {
        return view('private.gestionnaire.index');
    }
}
