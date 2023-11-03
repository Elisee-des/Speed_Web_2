<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProclamationController extends Controller
{
    public function proclamations()
    {
        return view('private.proclamations');
    }
}
