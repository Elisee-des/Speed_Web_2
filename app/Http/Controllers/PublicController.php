<?php

namespace App\Http\Controllers;

use App\Models\Affiche;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function accueil()
    {
        return view('index');
    }

    public function affiches()
    {
        $affiches = Affiche::with('')->orderBy('created_at', 'desc')->get();
        dd($affiches);
        return view('affiches');
    }

    public function affiches_detail($id)
    {
        $id = 1;
        return view('affiches-detail', compact('id'));
    }

    public function contact()
    {
        return view('contact');
    }

}
