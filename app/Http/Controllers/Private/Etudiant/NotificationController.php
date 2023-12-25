<?php

namespace App\Http\Controllers\Private\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notification()
    {
        return view('private.etudiant.notification');
    }
}
