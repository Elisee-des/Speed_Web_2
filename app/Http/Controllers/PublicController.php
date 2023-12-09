<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function accueil()
    {
        return view('index');
    }

    public function affiches()
    {
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
