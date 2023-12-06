<?php

namespace App\Http\Controllers\private\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gestionnaires = User::whereHas('roles', function ($query) {
            $query->where('name', 'Gestionnaire');
        })->get();

        return view('private.admin.gestionnaires.index', compact('gestionnaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.admin.gestionnaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idGestionnaire)
    {
        $gestionnaire = User::find($idGestionnaire);
        return view('private.admin.gestionnaires.detail', ['gestionnaire' => $gestionnaire]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
