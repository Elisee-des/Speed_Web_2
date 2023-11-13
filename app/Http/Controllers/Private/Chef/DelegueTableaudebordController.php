<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DelegueTableaudebordController extends Controller
{
    public function index()
    {
        return view('private.chef.index');
    }
}
