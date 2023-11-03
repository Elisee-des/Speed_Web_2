<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultatsController extends Controller
{
    public function resultats()
    {
        return view('private.index');
    }
}
