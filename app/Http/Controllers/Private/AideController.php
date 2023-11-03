<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AideController extends Controller
{
    public function aide()
    {
        return view('private.aide');
    }
}
