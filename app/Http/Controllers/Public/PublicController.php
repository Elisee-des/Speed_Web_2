<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function accueil()
    {
        return view('public.index');
    }

    public function contact()
    {
        return view('public.contact');
    }
}
