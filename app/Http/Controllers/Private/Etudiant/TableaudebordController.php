<?php

namespace App\Http\Controllers\Private\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableaudebordController extends Controller
{
    public function index()
    {
        return view('private.etudiant.index');
    }
}
