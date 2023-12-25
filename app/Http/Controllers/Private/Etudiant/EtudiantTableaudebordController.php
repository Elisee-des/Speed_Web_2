<?php

namespace App\Http\Controllers\Private\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtudiantTableaudebordController extends Controller
{
    public function index()
    {
        $nombreNouvellesNotifications = 10;
        return view('private.etudiant.index',compact('nombreNouvellesNotifications'));
    }
}
