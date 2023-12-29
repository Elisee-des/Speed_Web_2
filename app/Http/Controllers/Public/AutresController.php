<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutresController extends Controller
{
    public function page_introuvable()
    {
        return view('public.layouts.autres.errors404');
    }

    public function page_access_refuser()
    {
        return view('public.layouts.autres.errors403');
    }
}
