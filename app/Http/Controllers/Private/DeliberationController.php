<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliberationController extends Controller
{
    public function deliberations()
    {
        return view('private.deliberations');
    }
}
